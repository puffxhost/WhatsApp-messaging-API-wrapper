#!/bin/bash
curl -X POST https://api.x-server.in/send-message \
-H "Content-Type: application/json" \
-d '{ "api_key":"API_KEY", "sender":"SENDER", "number":"62822xxxx", "message":"Hello!" }'
