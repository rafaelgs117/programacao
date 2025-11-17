<?php include __DIR__ . '/header.php'; ?>
<h2>Estoque de Produtos</h2>

<?php if (empty($items)) { ?>
<p>Estoque vazio.</p>
<?php } else { 
    $totalGeral = 0;
?>
<table border="1" cellpadding="5">
<thead>
<tr>
<th>Nome</th><th>Quantidade</th><th>Preço Unitário</th><th>Total</th>
</tr>
</thead>
<tbody>
<?php foreach ($items as $it): 
    $total = $it['quantity'] * $it['price'];
    $totalGeral += $total;
?>
<tr>
<td><?= htmlspecialchars($it['name']) ?></td>
<td><?= $it['quantity'] ?></td>
<td>R$ <?= number_format($it['price'], 2, ',', '.') ?></td>
<td>R$ <?= number_format($total, 2, ',', '.') ?></td>
</tr>
<?php endforeach; ?>
</tbody>
<tfoot>
<tr>
<td colspan="3"><strong>Total Geral do Estoque</strong></td>
<td><strong>R$ <?= number_format($totalGeral, 2, ',', '.') ?></strong></td>
</tr>
</tfoot>
</table>
<?php } ?>

<?php include __DIR__ . '/footer.php'; ?>
