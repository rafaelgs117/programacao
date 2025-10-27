<?php
session_start();
if(!isset($_SESSION['logado'])){
    header("Location: login.html");
    exit;
}

$numero = $_POST['numero'];

setcookie("ultimo_numero", $numero, time() + 3600);

if($numero % 2 == 0){
    echo "<p class='verde'>O número $numero é PAR</p>";
} else {
    echo "<p class='azul'>O número $numero é ÍMPAR</p>";
}

if(isset($_COOKIE['ultimo_numero'])){
    echo "<p class='vermelho'>Último número verificado: ".$_COOKIE['ultimo_numero']."</p>";
}

echo "<br><a href='exercicio01.html'>Voltar</a>";
?>