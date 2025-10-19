// === Import library ===
const {
    default: makeWASocket,
    useMultiFileAuthState,
    DisconnectReason,
    fetchLatestBaileysVersion
} = require('@whiskeysockets/baileys');
const pino = require('pino');
const express = require('express');
const bodyParser = require('body-parser');
const qrcode = require('qrcode-terminal');

// === Inisialisasi Express ===
const app = express();
app.use(bodyParser.json());

const PORT = 3000;
let sock;
let isReady = false; // ✅ Status koneksi siap kirim

// === Fungsi koneksi utama ke WhatsApp ===
async function connectToWhatsApp() {
    const { state, saveCreds } = await useMultiFileAuthState('baileys_auth_info');
    const { version, isLatest } = await fetchLatestBaileysVersion();

    console.log('🌀 Menggunakan versi WA:', version, '| Terbaru:', isLatest);

    sock = makeWASocket({
        version,
        auth: state,
        logger: pino({ level: 'silent' })
    });

    // === Event koneksi & QR ===
    sock.ev.on('connection.update', (update) => {
        const { connection, lastDisconnect, qr } = update;

        if (qr) {
            console.log('\n📱 Scan QR Code berikut untuk login WhatsApp:');
            qrcode.generate(qr, { small: true });
        }

        if (connection === 'close') {
            isReady = false;
            const reason = lastDisconnect?.error?.output?.statusCode;
            const shouldReconnect = reason !== DisconnectReason.loggedOut;

            console.log('⚠️ Koneksi terputus karena', reason, ', mencoba lagi:', shouldReconnect);
            if (shouldReconnect) connectToWhatsApp();
            else console.log('🚪 Logout terdeteksi, silakan scan ulang QR.');
        } else if (connection === 'open') {
            console.log('✅ Koneksi WhatsApp berhasil dibuka!');
            isReady = true;
        }
    });

    sock.ev.on('creds.update', saveCreds);
}

// === Helper untuk normalisasi nomor Indonesia ===
function normalizeNumber(number) {
    let n = number.toString().trim();

    if (n.startsWith('0')) {
        n = '62' + n.substring(1);
    } else if (n.startsWith('+')) {
        n = n.replace('+', '');
    }

    return n;
}

// === Endpoint kirim pesan ===
app.post('/send-message', async (req, res) => {
    if (!isReady) {
        return res.status(503).json({
            success: false,
            error: 'Koneksi WhatsApp belum siap. Tunggu beberapa detik lagi.'
        });
    }

    let { number, message } = req.body;

    console.log('=== Data diterima dari Laravel ===');
    console.log('Nomor mentah   :', number);
    console.log('Pesan          :', message);

    if (!number || !message) {
        return res.status(400).json({
            success: false,
            error: 'Nomor dan pesan wajib diisi.'
        });
    }

    try {
        // ✅ Format nomor otomatis ke internasional (62xxx)
        const normalized = normalizeNumber(number);
        const formattedNumber = `${normalized}@s.whatsapp.net`;

        console.log('Nomor diformat :', formattedNumber);

        // Kirim pesan teks
        await sock.sendMessage(formattedNumber, { text: message });

        console.log(`📤 Pesan terkirim ke ${normalized}: ${message}`);
        return res.status(200).json({
            success: true,
            message: `Pesan berhasil dikirim ke ${normalized}`
        });
    } catch (error) {
        console.error('❌ Gagal mengirim pesan:', error);
        return res.status(500).json({
            success: false,
            error: 'Gagal mengirim pesan ke nomor tersebut. Coba lagi nanti.'
        });
    }
});

// === Jalankan server Baileys ===
connectToWhatsApp().then(() => {
    app.listen(PORT, () => {
        console.log(`🚀 Server Baileys berjalan di http://127.0.0.1:${PORT}`);
    });
});
