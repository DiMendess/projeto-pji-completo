
from flask import Flask, render_template, request, redirect, url_for
import mysql.connector


app = Flask(__name__)


@app.route("/")
def homepage():
    return render_template("index.html")



@app.route("/cadastro.php", methods=["GET"])
def cadastro1():
    return render_template("cadastro.php")
    

# Conectando-se ao banco de dados
cnx = mysql.connector.connect(
user='root',
password='',
host='localhost', database='formulario')

@app.route('/cadastro', methods=['GET', 'POST'])
def cadastro():
    if request.method == 'POST':
        # Processando os dados do formulário
        nome = request.form['nome']
        email = request.form['email']
        telefone = request.form['telefone']
        data_nasc = request.form['data_nasc']
        periodo = request.form['periodo']
        esporte = request.form['esporte']
        
        # Inserindo os dados no banco de dados
        cursor = cnx.cursor()
        query = "INSERT INTO inscritos (nome, email, telefone, data_nasc, periodo, esporte) VALUES (%s, %s, %s, %s, %s, %s)"
        valores = (nome, email, telefone, data_nasc, periodo, esporte )
        cursor.execute(query, valores)
        cnx.commit()
        cursor.close()
        
        # Exibindo conteudo
        return render_template('/cadastro.php', nome=nome)

        # Apos envio, carrega a pagina novamente
    return render_template('cadastro.php')

if __name__ == '__main__':
    app.run(debug=True)