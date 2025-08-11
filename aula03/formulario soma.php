<?php

$num01 = filter_input(INPUT_POST, "txtNumero1");
$num02 = filter_input(INPUT_POST, "txtNumero2"); // Obtém os números do formulário
$resul = ($num01 + $num02); // Calcula a soma
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario HTML >> PHP</title>
</head>
<body>
    <form method="post">
        <label>Numero 1: <input type= "text" name="txtNumero1"/></label><br>
        <label>Numero 2: <input type= "text" name="txtNumero2"/></label><br>
        <input type="submit" name="btnCalcular" value="Calcular"/>
    </form>
    <h1>Resultado</h1>
    <h1><?php 
    echo $resul; // Exibe o resultado da soma
    ?>
    </h1>
</body>
</html>