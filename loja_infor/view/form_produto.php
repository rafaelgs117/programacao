<h2>Cadastro de Produto</h2>
<form action="index.php?acao=cadastrar" method="POST">
    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>Descrição:</label>
    <input type="text" name="descricao">

    <label>Preço (R$):</label>
    <input type="number" name="preco" step="0.01" min="0" required>

    <label>Quantidade:</label>
    <input type="number" name="quantidade" min="0" required>

    <button type="submit">Cadastrar</button>
</form>