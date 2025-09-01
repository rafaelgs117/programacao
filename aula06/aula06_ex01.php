<!--
1) Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é
positivo, negativo ou igual a zero. A saída deve ser:Valor Positivo,Valor Negativovou Iguala Zero.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 01 - Aula 06</title>
</head>
<body>
    <h1>Exercício 01 - Aula 06</h1>
    <form action="" method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];

            if ($numero > 0) {
                echo "<p>Valor Positivo</p>";
            } elseif ($numero < 0) {
                echo "<p>Valor Negativo</p>";
            } else {
                echo "<p>Iguala Zero</p>";
            }
        }
    ?>
