<?php

$nome = $_POST['nome'];
$setor = $_POST['setor'];
$telefone = $_POST['telefone'];

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "escola";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$sql = "INSERT INTO supervisor (nome, setor, telefone) 
VALUES ('$nome', '$setor', '$telefone')";

if(mysqli_query($conexao, $sql)){
    echo"Registros de dados inseridos com sucesso";
}else{
    echo"Erro" . mysqli_error($conexao);
}
?>
