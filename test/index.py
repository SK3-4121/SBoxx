import requests
from requests.api import head

request = requests.Session();
headers = {
    "Authorization": "69lul"
}
files = {
    'Rocks': ("Rocks", open("coma.png", 'rb')),
    'Content-Type': 'image/jpeg',
}

r = request.post(url="https://api.dolphin-fe.xyz/p/index.php",headers=headers,files=files)
print(r.status_code, r.text)