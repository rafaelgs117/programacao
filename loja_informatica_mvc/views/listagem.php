<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Produtos</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Rafael Gonçalves da Silva<h1>
        <h1>Gerenciamento de Produtos</h1>
        <a href="views/formulario.php">Cadastrar Novo Produto</a>
        <table>
            <thead><tr><th>ID</th><th>Nome</th><th>Descrição</th><th>Preço</th><th>Qtd</th></tr></thead>
            <tbody>
                <?php if(!empty($produtos)): foreach($produtos as $p): ?>
                    <tr><td><?=htmlspecialchars($p['id'])?></td><td><?=htmlspecialchars($p['nome'])?></td>
                    <td><?=htmlspecialchars($p['descricao'])?></td><td>R$ <?=number_format($p['preco'],2,',','.')?></td>
                    <td><?=htmlspecialchars($p['quantidade'])?></td></tr>
                <?php endforeach; else: ?>
                    <tr><td colspan="5">Nenhum produto cadastrado.</td></tr>
                <?php endif; ?>
            </tbody>
            <tfoot><tr><td colspan="5">Total de produtos: <?=$total?></td></tr></tfoot>
        </table>
        <h3>Excluir Produto por Nome</h3>
        <form action="index.php?action=delete" method="POST">
            <input type="text" name="nome_delete" placeholder="Nome do produto" required>
            <button type="submit">Excluir</button>
        </form>
        <h3>Atualizar Produto</h3>
        <form action="index.php?action=update" method="POST">
            <input type="text" name="nome_busca" placeholder="Nome do produto" required>
            <input type="text" name="descricao_update" placeholder="Nova descrição">
            <input type="number" step="0.01" name="preco_update" placeholder="Novo preço" required>
            <button type="submit">Atualizar</button>
        </form>
    </div>
</body>
</html>
