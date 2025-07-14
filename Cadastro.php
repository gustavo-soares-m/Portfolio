<?php
    
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $idade = $_POST["idade"];
        $genero = $_POST["genero"];
        $obs = $_POST["obs"];

        $servidor = "localhost"; // Nome do servidor
        $usuario = "root"; // usuario do sgbd
        $senha = ""; // senha do sgbd
        $database = "registro"; // nome da base de dados

        //conectando ao banco
        $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

        //inserindo os dados na tabela
        $sql = "INSERT INTO dados (nome, email, idade, genero, observacoes)
        values ('$nome','$email','$idade','$genero','$obs')";

        //verificando conexão e inserção de dados
        if(mysqli_query($conexao, $sql)){
            echo'Registro inserido com sucesso!';
        } else{
            echo'Erro; '. mysqli_error($conexao);
        }

        
        
?>