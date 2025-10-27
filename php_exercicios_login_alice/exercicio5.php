<?php
require_once 'includes/auth.php';
$n = isset($_POST['numero']) ? (int)$_POST['numero'] : null;
if ($n===null) { header('Location: exercicio5.html'); exit; }
setcookie('ex05_ultimo', $n, time()+60);
$par = ($n % 2 === 0);
$classe = $par ? 'resultado-par' : 'resultado-impar';
$msg = $par ? "{$n} é par" : "{$n} é ímpar";
?>
<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><title>Paridade</title><link rel="stylesheet" href="css/styles.css"></head><body><div class="container">
<h1>Par ou Ímpar</h1>
<div class="<?php echo $classe; ?>"><?php echo $msg; ?></div>
<p class="small">Último: <?php echo $_COOKIE['ex05_ultimo'] ?? 'nenhum'; ?></p>
<p><a href="exercicio5.html">Voltar</a></p>
</div></body></html>
