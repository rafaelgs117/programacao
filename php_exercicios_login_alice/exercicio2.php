<?php
require_once 'includes/auth.php';
$n = isset($_POST['numero']) ? (int)$_POST['numero'] : null;
if ($n===null) { header('Location: exercicio2.html'); exit; }
setcookie('ex02_numero', $n, time()+60);
ob_start();
?>
<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><title>Tabuada</title><link rel="stylesheet" href="css/styles.css"></head><body><div class="container">
<h1>Tabuada de <?php echo $n; ?></h1>
<ul>
<?php for ($i=0;$i<=10;$i++): ?>
  <li><?php echo "$n × $i = " . ($n*$i); ?></li>
<?php endfor; ?>
</ul>
<p class="small">Último número: <?php echo $_COOKIE['ex02_numero'] ?? 'nenhum'; ?></p>
<p><a href="exercicio2.html">Voltar</a></p>
</div></body></html>
<?php ob_end_flush(); ?>
