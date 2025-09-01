<!--
4) Calculadora com SwitchCase. Crie um programa em que o usuário escolha uma operação
(soma, subtração, multiplicação ou divisão). Crie duas caixas de texto para receber 2 números.
Realize a operação escolhida em cada um dos números.
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora com SwitchCase</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Calculadora com SwitchCase</h2>
        <form method="post" action="">
            <div class="form-group
">
                <label for="num1">Número 1:</label>
                <input type="number" class="form-control" id="num1" name="num1" required>
            </div>
            <div class="form-group
">
                <label for="num2">Número 2:</label>
                <input type="number" class="form-control" id="num2" name="num2" required>
            </div>
            <div class="form-group">
                <label for="operation">Operação:</label>
                <select class="form-control" id="operation" name="operation" required>
                    <option value="soma">Soma</option>
                    <option value="subtracao">Subtração</option>
                    <option value="multiplicacao">Multiplicação</option>
                    <option value="divisao">Divisão</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = 0;

            switch ($operation) {
                case 'soma':
                    $result = $num1 + $num2;
                    break;
                case 'subtracao':
                    $result = $num1 - $num2;
                    break;
                case 'multiplicacao':
                    $result = $num1 * $num2;
                    break;
                case 'divisao':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        echo "<div class='alert alert-danger mt-4'>Erro: Divisão por zero não é permitida.</div>";
                        exit;
                    }
                    break;
                default:
                    echo "<div class='alert alert-danger mt-4'>Operação inválida.</div>";
                    exit;
            }

            echo "<div class='alert alert-success mt-4'>O resultado é: <strong>$result</strong></div>";
        }  
        ?>
    </div>
</body>
</html>