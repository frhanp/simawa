const { default: makeWASocket, useMultiFileAuthState, DisconnectReason } = require('@whiskeysockets/baileys');
const pino = require('pino');
const express = require('express');
const bodyParser = require('body-parser');
const qrcode = require('qrcode-terminal');

const app = express();
app.use(bodyParser.json());

const PORT = 3000; // Port untuk server Baileys
let sock; // Variabel untuk menyimpan instance socket

async function connectToWhatsApp() {
    const { state, saveCreds } = await useMultiFileAuthState('baileys_auth_info');
    
    sock = makeWASocket({
        auth: state,
        printQRInTerminal: true,
        logger: pino({ level: 'silent' })
    });

    sock.ev.on('connection.update', (update) => {
        const { connection, lastDisconnect, qr } = update;
        if(qr) {
            console.log("QR Code diterima, silakan scan:");
            qrcode.generate(qr, { small: true });
        }
        if(connection === 'close') {
            const shouldReconnect = (lastDisconnect.error)?.output?.statusCode !== DisconnectReason.loggedOut;
            console.log('Koneksi terputus karena ', lastDisconnect.error, ', mencoba menghubungkan kembali... ', shouldReconnect);
            if(shouldReconnect) {
                connectToWhatsApp();
            }
        } else if(connection === 'open') {
            console.log('Koneksi WhatsApp berhasil dibuka!');
        }
    });

    sock.ev.on('creds.update', saveCreds);
}

// Endpoint untuk mengirim pesan
app.post('/send-message', async (req, res) => {
    const { number, message } = req.body;

    if (!number || !message) {
        return res.status(400).json({ success: false, error: 'Nomor dan pesan wajib diisi.' });
    }

    try {
        // Format nomor: 628xxxx (tanpa + atau 0 di depan)
        const formattedNumber = `${number}@s.whatsapp.net`;
        await sock.sendMessage(formattedNumber, { text: message });
        res.status(200).json({ success: true, message: 'Pesan berhasil dikirim.' });
    } catch (error) {
        console.error('Gagal mengirim pesan:', error);
        res.status(500).json({ success: false, error: 'Gagal mengirim pesan.' });
    }
});

// Jalankan koneksi dan server
connectToWhatsApp().then(() => {
    app.listen(PORT, () => {
        console.log(`Server Baileys berjalan di http://localhost:${PORT}`);
    });
});