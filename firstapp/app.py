from flask import Flask

app = Flask(__name__)

@app.route("/")
def index():
    return "<h1> Home  </h1>"

@app.route("/hello")
def hello():
    return "<h1> Hello </h1>"

@app.route("/test/<name>")
def test(name):
    return f"<h1> Hello, {name}  </h1>"

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=3300)