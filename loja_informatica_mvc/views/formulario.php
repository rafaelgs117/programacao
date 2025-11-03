<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Rafael Gonçalves da Silva</h1>
    <h1>Cadastro de Produtos - Loja de Informática</h1>
    <form action="../index.php?action=create" method="POST">
        <h2>Cadastrar Produto</h2>
        <label>Nome do Produto:</label>
        <input type="text" name="nome" required>
        <label>Descrição:</label>
        <input type="text" name="descricao">
        <label>Preço (R$):</label>
        <input type="number" name="preco" step="0.01" min="0" required>
        <label>Quantidade:</label>
        <input type="number" name="quantidade" min="0" required>
        <button type="submit">Cadastrar Produto</button>
    </form>
    <hr>
    <a href="../index.php">Ver / Gerenciar Produtos</a> 
</body>
</html>
