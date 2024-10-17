from flask import Flask,request

app = Flask(__name__)

@app.route("/")
def index():
    return "<h1>  Hello </h1>"

@app.route("/test")
def test():
    return "<h1> test </h1>"

@app.route("/sum/<int:num1>/<int:num2>")
def sum(num1,num2):
    return f"<h1> test {num1} + {num2} = {num1+num2} </h1>"
    # return f"<h1> test {num1} + {num2} = {int(num1)+int(num2)} </h1>"

@app.route("/handle_params")
def handle_params():
    return str(request.args)
    # return str(request.args.get('name'))
  

    # if 'greeting' in request.args.keys() and 'name' in request.args.keys():
    #     greeting = request.args['greeting']
    #     name = request.args.get['name']
    #     return '{greeting}, {name}' 
    # else:
    #     return "Something missing"


@app.route("/hello" , methods=['POST','GET'])
def hello():   
    if request.method == 'POST':
        return "return POST"
    elif request.method == 'GET':
        return "return GET"
  


if __name__ == '__main__':
    app.run(host='0.0.0.0',port=3300)