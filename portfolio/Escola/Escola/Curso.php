<?php

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$carga = $_POST['carga_horaria'];

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "escola";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$sql = "INSERT INTO curso (nome, descricao, carga_horaria) 
VALUES ('$nome', '$descricao', $carga)";

if(mysqli_query($conexao, $sql)){
    echo"Registros de dados inseridos com sucesso";
}else{
    echo"Erro" . mysqli_error($conexao);
}

?>