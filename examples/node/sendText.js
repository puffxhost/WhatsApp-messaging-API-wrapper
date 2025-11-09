import MpwaClient from "../../sdk/js/index.js";
const client = new MpwaClient({ apiKey: "API_KEY", sender: "SENDER" });
client.sendText({ number: "62822xxxx", message: "Hello!" }).then(console.log);
