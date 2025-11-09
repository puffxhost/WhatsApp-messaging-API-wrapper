from sdk.python.mpwa import MpwaClient
client = MpwaClient("API_KEY","SENDER")
print(client.send_text("62822xxxx","Hello!"))
