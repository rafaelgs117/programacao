<?php
// conexao.php XAMPP
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastro_loja_informatica";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
