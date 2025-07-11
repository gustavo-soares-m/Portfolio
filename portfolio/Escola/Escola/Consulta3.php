<?php


$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "escola";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$sql = "SELECT nome, descricao, carga_horaria FROM curso";
$resultado = mysqli_query($conexao, $sql);

echo "<h1>Registros</h1>";
if(mysqli_num_rows($resultado) > 0) {
    while ($registro = mysqli_fetch_array($resultado)) {
        echo "Nome:" . $registro['nome']. " Descrição: " . $registro['descricao']. " Carga Horária: " . $registro['carga_horaria'];
    }
}else{
    echo "Nenhum registro encontrado.";
}

?>