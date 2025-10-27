<?php
require_once 'includes/auth.php';
$m = isset($_POST['mes']) ? (int)$_POST['mes'] : null;
if ($m===null) { header('Location: exercicio10.html'); exit; }
$meses = [1=>'Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'];
if ($m < 1 || $m > 12) { $msg = 'Não existe mês com esse número.'; $classe='error'; }
else { $msg = $meses[$m]; $classe='success'; }
setcookie('ex10_data', "{$m}", time()+60);
?>
<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><title>Mês</title><link rel="stylesheet" href="css/styles.css"></head><body><div class="container">
<h1>Mês</h1>
<div class="<?php echo $classe; ?>"><?php echo $msg; ?></div>
<p class="small">Último: <?php echo $_COOKIE['ex10_data'] ?? 'nenhum'; ?></p>
<p><a href="exercicio10.html">Voltar</a></p>
</div></body></html>
