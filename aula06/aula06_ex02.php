<!--
2) Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de
acordo com o número solicitado, ex: Entrada = 4
Saída = 4 X 0 = 0...4 X 10 = 40.
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tabuada</h1>
    <form action="" method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST['numero']);
        echo "<h2>Tabuada do $numero:</h2>";
        echo "<ul>";
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>