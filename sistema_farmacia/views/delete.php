<?php include __DIR__ . '/header.php'; ?>
<h2>Excluir Produto</h2>
<?php if(isset($msg)) echo "<p>".htmlspecialchars($msg)."</p>"; ?>
<form method='post' action='?action=delete'>
<label>Nome (exato): <input name='name' required></label><button>Excluir</button>
</form>
<?php include __DIR__ . '/footer.php'; ?>