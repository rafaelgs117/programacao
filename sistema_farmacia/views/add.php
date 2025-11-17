<?php include __DIR__ . '/header.php'; ?>
<h2>Adicionar Produto</h2>
<?php if(isset($msg)) echo "<p>".htmlspecialchars($msg)."</p>"; ?>
<form method='post' action='?action=add'>
<label>Nome: <input name='name' required></label><br>
<label>Quantidade: <input name='quantity' type='number' min='1' required></label><br>
<label>Preço: <input name='price' type='number' step='0.01' min='0' required></label><br>
<button>Salvar</button>
</form>
<?php include __DIR__ . '/footer.php'; ?>