// Puffx WhatsApp API SDK (JS)
export default class MpwaClient {
  constructor({ apiKey, sender, baseUrl = "https://api.x-server.in" }) {
    this.apiKey = apiKey;
    this.sender = sender;
    this.baseUrl = baseUrl.replace(/\/$/, "");
  }
  async req(path, data) {
    const res = await fetch(this.baseUrl + path, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ api_key: this.apiKey, sender: this.sender, ...data })
    });
    return res.json();
  }
  sendText(opts){ return this.req("/send-message", opts); }
  sendList(opts){ return this.req("/send-list", opts); }
  sendMedia(opts){ return this.req("/send-media", opts); }
}
