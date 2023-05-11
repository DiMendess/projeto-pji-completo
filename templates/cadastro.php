

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Cadastro</title>
    <link rel="shortcut icon" href="{{ url_for('static', filename='imagens/guararema.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ url_for('static', filename='style02.css')}}">
</head>
<body>
    <div class="box">
        <form action="cadastro" id="cadastro" method="POST">
            <fieldset>
                <legend><b>Formulario de Inscrição</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                    <br>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="nome"  class="labelInput">Email</label>
                    <br>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="nome"  class="labelInput">Telefone</label>
                    <br>
                </div>
                <br></br>
                <label for="data_nasc"><b>Data de Nascimento</b></label>
                <input type="date" name="data_nasc" id="data_nasc" required>
                <br></br>
                <p>Periodo:</p>
                <input type="radio" name="periodo" value="manha" required>
                <label for="Manha">Manhã</label>
                <br>
                <input type="radio" name="periodo" value="tarde" required>
                <label for="tarde">Tarde</label>
                <br>
                <input type="radio" name="periodo" value="noite" required>
                <label for="noite">Noite</label>
                <br>
                <p>Esporte:</p>
                <input type="radio" name="esporte" value="Volei" required>
                <label for="Volei">Vôlei</label>
                <input type="radio" name="esporte" value="Futsal" required>
                <label for="Futsal">Futsal</label>
                <input type="radio" name="esporte" value="Basquete" required>
                <label for="noite">Basquete</label>
                <br></br>
                <div class="inputBox">
                </div>
                <a href="index.html"><input type="submit" name="submit" id="submit"></a>
                </fieldset>
            </form>
            <a href="/"><img class="logo" src="{{ url_for('static', filename='imagens/logoprefeitura.png')}}" alt="Logo"></a>

    </div>
    
</body>
</html>
