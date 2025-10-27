<?php
session_start();
if(!isset($_SESSION['logado'])){
    header("Location: login.html");
    exit;
}

$numero = $_POST['numero'];
setcookie("ultima_tabuada", $numero, time() + 3600);

echo "<h3>Tabuada do $numero</h3>";
for($i=1; $i<=10; $i++){
    echo "<p class='azul'>$numero x $i = ".($numero*$i)."</p>";
}

if(isset($_COOKIE['ultima_tabuada'])){
    echo "<p class='verde'>Última tabuada gerada: ".$_COOKIE['ultima_tabuada']."</p>";
}

echo "<br><a href='exercicio02.html'>Voltar</a>";
?>