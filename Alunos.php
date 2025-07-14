<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$genero = $_POST['genero'];
$observacoes = $_POST['observacoes'];

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "escola";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$sql = "INSERT INTO aluno (nome, email, idade, genero, observacoes) 
VALUES ('$nome', '$email', $idade, '$genero', '$observacoes')";

if(mysqli_query($conexao, $sql)){
    echo"Registros de dados inseridos com sucesso";
}else{
    echo"Erro" . mysqli_error($conexao);
}
?>
