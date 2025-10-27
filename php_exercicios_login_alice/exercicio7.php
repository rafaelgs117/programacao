<?php
require_once 'includes/auth.php';
$a = isset($_POST['a']) ? (float)$_POST['a'] : null;
$b = isset($_POST['b']) ? (float)$_POST['b'] : null;
if ($a===null || $b===null) { header('Location: exercicio7.html'); exit; }
if ($a > $b) $msg = "A maior que B";
elseif ($a < $b) $msg = "A menor que B";
else $msg = "A igual a B";
setcookie('ex07_resultado', $msg, time()+60);
?>
<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><title>Comparar</title><link rel="stylesheet" href="css/styles.css"></head><body><div class="container">
<h1>Comparação</h1>
<div class="success"><?php echo $msg; ?></div>
<p class="small">Último: <?php echo $_COOKIE['ex07_resultado'] ?? 'nenhum'; ?></p>
<p><a href="exercicio7.html">Voltar</a></p>
</div></body></html>
