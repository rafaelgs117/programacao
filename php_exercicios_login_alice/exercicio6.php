<?php
require_once 'includes/auth.php';
$vals = [];
foreach (['a','b','c','d','e'] as $k) { $vals[] = isset($_POST[$k]) ? (float)$_POST[$k] : null; }
if (in_array(null, $vals, true)) { header('Location: exercicio6.html'); exit; }
sort($vals);
// menor, medio (terceiro), maior (quinto)
setcookie('ex06_resultado', "menor:{$vals[0]},medio:{$vals[2]},maior:{$vals[4]}", time()+60);
?>
<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><title>Ordenar</title><link rel="stylesheet" href="css/styles.css"></head><body><div class="container">
<h1>Valores em ordem crescente</h1>
<ol>
  <?php foreach ($vals as $v): ?><li><?php echo $v; ?></li><?php endforeach; ?>
</ol>
<p class="small">Resultado salvo: <?php echo $_COOKIE['ex06_resultado'] ?? 'nenhum'; ?></p>
<p><a href="exercicio6.html">Voltar</a></p>
</div></body></html>
