<?php

$nome = $_POST['nome'];
$especialidade = $_POST['especialidade'];
$email = $_POST['email'];

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "escola";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$sql = "INSERT INTO professor (nome, especialidade, email)
VALUES ('$nome', '$especialidade', '$email')";

if(mysqli_query($conexao, $sql)){
    echo"Registros de dados inseridos com sucesso";
}else{
    echo"Erro" . mysqli_error($conexao);
}
?>
