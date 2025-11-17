<?php include __DIR__ . '/header.php'; ?>
<h2>Pesquisar Produto</h2>
<form method='post' action='?action=search'>
<label>Nome (ou parte): <input name='term' required></label><button>Pesquisar</button>
</form>
<?php if(isset($results)) { if(empty($results)) echo '<p>Nenhum resultado.</p>'; else { echo '<h3>Resultados:</h3><ul>'; foreach($results as $r) echo '<li>'.htmlspecialchars($r['name']).' - '.htmlspecialchars($r['quantity']).' - '.number_format($r['price'],2,',','').'</li>'; echo '</ul>'; } } include __DIR__ . '/footer.php'; ?>