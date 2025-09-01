<!--
3) Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o
resultado na tela. Ex: Entrada = 3 Processamento: (3 * 2) * 1 Saída: 6
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Aula 03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exercício 3 - Aula 03</h1>
    <form action="" method="post">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Calcular Fatorial">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = intval($_POST["numero"]);
            $fatorial = 1;

            for ($i = $numero; $i > 1; $i--) {
                $fatorial *= $i;
            }

            echo "<h2>O fatorial de $numero é: $fatorial</h2>";
        }
    ?>
</body>
</html>