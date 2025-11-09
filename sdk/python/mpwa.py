# Puffx WhatsApp API SDK (Python)
import json, urllib.request

class MpwaClient:
    def __init__(self, api_key, sender, base_url="https://api.x-server.in"):
        self.api_key = api_key
        self.sender = sender
        self.base_url = base_url.rstrip("/")

    def call(self, path, payload):
        data = json.dumps({"api_key": self.api_key, "sender": self.sender, **payload}).encode()
        req = urllib.request.Request(self.base_url+path, data=data, headers={"Content-Type":"application/json"})
        return json.loads(urllib.request.urlopen(req).read().decode())

    def send_text(self, number, message, footer=None):
        return self.call("/send-message", {"number": number, "message": message, "footer": footer})
