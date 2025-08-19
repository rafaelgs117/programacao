<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Aluno</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura apenas os 3 campos
    $nome     = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $endereco = isset($_POST['endereco']) ? trim($_POST['endereco']) : '';
    $cidade   = isset($_POST['cidade']) ? trim($_POST['cidade']) : '';

    // Validação simples
    if (empty($nome) || empty($endereco) || empty($cidade)) {
        echo "<h2 style='color:red;'>Falha no cadastro: todos os campos são obrigatórios.</h2>";
    } else {
        echo "<h2 style='color:green;'>Cadastro realizado com sucesso!</h2>";
        ?>
        <h1>Dados do Cadastro</h1>
        <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
        <p><strong>Endereço:</strong> <?php echo htmlspecialchars($endereco); ?></p>
        <p><strong>Cidade:</strong> <?php echo htmlspecialchars($cidade); ?></p>
        <?php

        // Conexão com o banco de dados
        $conexao = mysqli_connect("localhost", "root", "", "bd2");

        if (!$conexao) {
            die("Erro de conexão com o banco de dados: " . mysqli_connect_error());
        }

        // Escapar os dados
        $nome     = mysqli_real_escape_string($conexao, $nome);
        $endereco = mysqli_real_escape_string($conexao, $endereco);
        $cidade   = mysqli_real_escape_string($conexao, $cidade);

        // Monta e executa a query
        $sql = "INSERT INTO alunos (nome, endereco, cidade) VALUES ('$nome', '$endereco', '$cidade')";

        if (mysqli_query($conexao, $sql)) {
            echo "<p style='color:green;'>Dados gravados no banco com sucesso!</p>";
        } else {
            echo "<p style='color:red;'>Erro ao gravar no banco: " . mysqli_error($conexao) . "</p>";
        }

        mysqli_close($conexao);
    }
}
?>

<h2>Formulário de Cadastro</h2>
<form method="POST" action="">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="endereco">Endereço:</label><br>
    <input type="text" id="endereco" name="endereco" required><br><br>

    <label for="cidade">Cidade:</label><br>
    <input type="text" id="cidade" name="cidade" required><br><br>

    <button type="submit">Cadastrar</button>
</form>

</body>
</html>
