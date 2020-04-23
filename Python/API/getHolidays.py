import requests, json, flask
from datetime import datetime
from flask import request, jsonify

app = flask.Flask(__name__)
app.config["DEBUG"] = True

url = "https://api.calendario.com.br/?json=true&ano=2020&ibge=4216602&token=dGhpYWdvLmFsYmVydG9AaW50ZWxicmFzLmNvbS5iciZoYXNoPTIwMjA3MTc1OA"
payload = {}
headers = {}
response = requests.request("GET", url, headers=headers, data = payload)
today = datetime.today().strftime('%d/%m/%Y')
feriado = 0

if (response.status_code == 200):
    jsonr = response.json()
    json_y = json.dumps(jsonr, separators=(',', ':'))
    json_x = json.loads(json_y)
    # GETs the list of holidays in JSON format
    for x in range(30):
      try:
          if json_x[x]["type_code"] == '1':
            if (today == json_x[x]["date"]):
                feriado =+ 1;
            else:
                feriado =+ 0;
      except:
          continue
    if(feriado == 1):
        feriado = {'Feriado':'True'}
    else:
        feriado = {'Feriado':'False'}
else:
    print('Retorno da chamada com status:' + response.status_code)
    #
    #
    #
    # Develope a automatic send e-mail.
    #
    #
    #

@app.route('/api/v1/calendario/feriados/', methods=['GET'])
def api_all():
    return jsonify(feriado)

@app.route('/', methods=['GET'])
def home():
    return ('home')

app.run(host= '0.0.0.0')