<?php
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario === "admin" && $senha === "123"){
    $_SESSION['logado'] = true;
    header("Location: index.php");
} else {
    echo "<p style='color:red;'>Usuário ou senha inválidos!</p>";
    echo "<a href='login.html'>Voltar</a>";
}
?>