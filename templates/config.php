<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //  if($conexao->connect_errno)
    //  {
    //      echo "Erro";
    //  }
    //  else
    //  {
    //      echo "Conexao efetuada com sucesso!";
    //  }

    if(isset($_POST['submit']))
    {
        // print_r($_POST['nome']);
        // print_r('<br>');
        // print_r($_POST['email']);
        // print_r('<br>');
        // print_r($_POST['telefone']);
        // print_r('<br>');
        // print_r($_POST['data_nascimento']);
        // print_r('<br>');
        // print_r($_POST['periodo']);
        // print_r('<br>');
        // print_r($_POST['esporte']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_nasc = $_POST['data_nascimento'];
        $periodo = $_POST['periodo'];
        $esporte = $_POST['esporte'];

        $result = mysqli_query($conexao, "INSERT INTO inscritos(nome,email,telefone,data_nasc,periodo,esporte) VALUES ('$nome', '$email','$telefone','$data_nasc','$periodo','$esporte')");
       
        

    }

?>

