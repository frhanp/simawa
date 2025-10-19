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

const app = express();
app.use(bodyParser.json());

const PORT = 3000;
let sock;

async function connectToWhatsApp() {
    const { state, saveCreds } = await useMultiFileAuthState('baileys_auth_info');
    const { version, isLatest } = await fetchLatestBaileysVersion();
    console.log('🌀 Menggunakan versi WA:', version, '| Terbaru:', isLatest);

    sock = makeWASocket({
        version,        // ✅ versi protokol resmi WhatsApp Web
        auth: state,
        logger: pino({ level: 'silent' })
    });

    // Event koneksi dan QR
    sock.ev.on('connection.update', (update) => {
        const { connection, lastDisconnect, qr } = update;

        if (qr) {
            console.log('\n📱 Scan QR Code berikut untuk login WhatsApp:');
            qrcode.generate(qr, { small: true });
        }

        if (connection === 'close') {
            const reason = lastDisconnect?.error?.output?.statusCode;
            const shouldReconnect = reason !== DisconnectReason.loggedOut;
            console.log('⚠️ Koneksi terputus karena', reason, ', mencoba lagi:', shouldReconnect);
            if (shouldReconnect) connectToWhatsApp();
            else console.log('🚪 Logout terdeteksi, silakan scan ulang QR.');
        } else if (connection === 'open') {
            console.log('✅ Koneksi WhatsApp berhasil dibuka!');
        }
    });

    sock.ev.on('creds.update', saveCreds);
}

// Endpoint kirim pesan
app.post('/send-message', async (req, res) => {
    const { number, message } = req.body;

    if (!number || !message) {
        return res.status(400).json({
            success: false,
            error: 'Nomor dan pesan wajib diisi.'
        });
    }

    try {
        const formattedNumber = `${number}@s.whatsapp.net`;
        await sock.sendMessage(formattedNumber, { text: message });
        res.status(200).json({
            success: true,
            message: 'Pesan berhasil dikirim.'
        });
    } catch (error) {
        console.error('❌ Gagal mengirim pesan:', error);
        res.status(500).json({
            success: false,
            error: 'Gagal mengirim pesan.'
        });
    }
});

// Jalankan koneksi & server
connectToWhatsApp().then(() => {
    app.listen(PORT, () => {
        console.log(`🚀 Server Baileys berjalan di http://localhost:${PORT}`);
    });
});
