<?php
$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$banco    = "cadastro";

// Cria a conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verifica a conexão
if (!$conexao) {
    die("Erro de conexão com o banco de dados: " . mysqli_connect_error());
}
?>
