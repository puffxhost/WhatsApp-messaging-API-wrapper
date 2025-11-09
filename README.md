<div style="font-family: Arial, sans-serif; max-width: 900px; margin: auto; padding: 20px; line-height: 1.6;">

  <h1>Puffx WhatsApp Messaging API Wrapper</h1>
  <p>
    High-performance WhatsApp Messaging SDK powered by the MPWA / X-Server infrastructure.
    Supports automation, chatbot development, bulk messaging, and interactive WhatsApp message types.
  </p>

  <h2>✅ Core Message Features</h2>
  <ul>
    <li>Send Text Message</li>
    <li>Send Product Message</li>
    <li>Send Text to Channel</li>
    <li>Send Media (image / video / audio / document)</li>
    <li>Send Stickers</li>
    <li>Send Polls</li>
    <li>Send Interactive Buttons</li>
    <li>Send Interactive List Menus</li>
    <li>Send Location Pins</li>
    <li>Send vCard Contacts</li>
  </ul>

  <h2>🧠 Device & Account Management</h2>
  <ul>
    <li>Generate & Scan QR to Login Device</li>
    <li>Disconnect Device</li>
    <li>Delete Device</li>
    <li>Create User Accounts</li>
    <li>Check WhatsApp Number Status</li>
    <li>Fetch Device Info</li>
    <li>Fetch User Info</li>
  </ul>

  <h2>📡 Webhook Support</h2>
  <p>Receive incoming messages with full metadata & media support for chatbot logic.</p>

  <pre><code>{
  "device": "628222xxxxxx",
  "message": "Hi",
  "from": "62822xxxxxx",
  "name": "User Name",
  "media": { ... },
  "mimetype": "image/jpeg"
}</code></pre>

  <h2>⚙️ Installation</h2>
  <pre><code>git clone https://github.com/puffxhost/WhatsApp-messaging-API-wrapper.git</code></pre>

  <pre><code>
API_BASE=https://api.x-server.in
API_KEY=YOUR_API_KEY
DEFAULT_SENDER=YOUR_DEVICE_NUMBER
  </code></pre>

  <h2>📂 Directory</h2>
  <pre><code>
├── api/ (OpenAPI + Postman)
├── sdk/
│   ├── js/
│   ├── python/
│   └── php/
└── examples/
    ├── curl/
    ├── node/
    ├── python/
    └── php/
  </code></pre>

  <h2>🟢 Example — Node.js</h2>
  <pre><code>import MpwaClient from "./sdk/js/index.js";

const client = new MpwaClient({
  apiKey: process.env.API_KEY,
  sender: process.env.DEFAULT_SENDER
});

await client.sendText({
  number: "628222xxxxxx",
  message: "Hello from Puffx API!",
  footer: "Powered by PuffxHost"
});
  </code></pre>

  <h2>🟦 Example — Python</h2>
  <pre><code>from sdk.python.mpwa import MpwaClient

client = MpwaClient(api_key="YOUR_KEY", sender="YOUR_DEVICE")
client.send_text("628222xxxxxx", "Hello", footer="Powered by Puffx")
  </code></pre>

  <h2>🟨 Example — PHP</h2>
  <pre><code>$client = new MpwaClient("YOUR_KEY", "YOUR_DEVICE");
$client->sendText("628222xxxxxx", "Hello", "Powered by Puffx");
  </code></pre>

  <h2>📍 Example — Send List Menu</h2>
  <pre><code>
client.sendList({
  number: "628222xxxxxx",
  name: "Menu Selection",
  title: "Choose Option",
  buttontext: "Open Menu",
  message: "Select one:",
  sections: [
    {
      "title": "Main",
      "rows": [
        {"title": "Buy", "rowId": "buy"},
        {"title": "Support", "rowId": "support"}
      ]
    }
  ]
});
  </code></pre>

  <h2>🗺️ Example — Send Location</h2>
  <pre><code>
client.sendLocation({
  number: "628222xxxxxx",
  latitude: "24.928",
  longitude: "78.102"
});
  </code></pre>

  <h2>📇 Example — Send vCard Contact</h2>
  <pre><code>
client.sendVcard({
  number: "628222xxxxxx",
  name: "John Doe",
  phone: "628111xxxxxx"
});
  </code></pre>

  <h2>🔐 Device Login (Scan QR)</h2>
  <pre><code>
client.generateQR({ device: "YOUR_DEVICE" });
  </code></pre>

  <h2>🔥 Recommended Hosting</h2>
  <p>
    Use <strong>Puffx Host</strong> for WhatsApp bot / automation:
    <a href="https://puffxhost.com" target="_blank">https://puffxhost.com</a>
  </p>

  <h2>📜 License</h2>
  <p>MIT License</p>

  <h2>👑 Author</h2>
  <p>
    <strong>Nitin Mehta</strong><br>
    GitHub: <a href="https://github.com/puffxhost" target="_blank">@puffxhost</a>
  </p>

  <hr>
  <p align="center">Built for real production usage. No hype. No bullshit.</p>

</div>
