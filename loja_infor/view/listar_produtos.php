<div class="container">
    <h2>Lista de Produtos</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th><th>Nome</th><th>Descrição</th><th>Preço (R$)</th><th>Qtd</th><th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= htmlspecialchars($p['nome']) ?></td>
                    <td><?= htmlspecialchars($p['descricao']) ?></td>
                    <td><?= number_format($p['preco'], 2, ',', '.') ?></td>
                    <td><?= $p['quantidade'] ?></td>
                    <td>
                        <a href="index.php?acao=deletar&nome=<?= urlencode($p['nome']) ?>" onclick="return confirm('Excluir o produto <?= htmlspecialchars($p['nome']) ?>?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>