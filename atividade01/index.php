<?php
session_start();
if(!isset($_SESSION['logado']) || $_SESSION['logado'] !== true){
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Bem-vindo!</h1>
    <ul>
        <li><a href="exercicio01.html">Exercício 01</a></li>
        <li><a href="exercicio02.html">Exercício 02</a></li>
    </ul>
    <br>
    <a href="logout.php">Sair</a>
</body>
</html>