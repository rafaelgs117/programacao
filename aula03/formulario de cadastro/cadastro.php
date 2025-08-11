<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario de cadastro - Processamento</title>
</head>
<body>
    <?php // Verifica se os dados foram enviados via GET

    $nome = $_GET['nome']; // Obtém o informaçoes do usuário
    $endereco = $_GET['endereco']; 
    $cidade = $_GET['cidade'];

    echo "<h1>Dados Recebidos:</h1>"; // Exibe o título
    echo "<p><strong>Nome:</strong> $nome</p>"; // Exibe o nome do usuário
    echo "<p><strong>Endereço:</strong> $endereco</p>"; // Exibe o endereço do usuário
    echo "<p><strong>Cidade:</strong> $cidade</p>"; // Exibe a cidade do usuário
    ?>
</body>
</html>