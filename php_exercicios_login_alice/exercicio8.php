<?php
require_once 'includes/auth.php';
$n1 = isset($_POST['n1']) ? (float)$_POST['n1'] : null;
$n2 = isset($_POST['n2']) ? (float)$_POST['n2'] : null;
$n3 = isset($_POST['n3']) ? (float)$_POST['n3'] : null;
if ($n1===null || $n2===null || $n3===null) { header('Location: exercicio8.html'); exit; }
$media = (($n1*2)+($n2*2)+($n3*1))/5;
$situacao = '';
if ($media >= 7) $situacao = 'Aprovado';
elseif ($media >=5) $situacao = 'Recuperação';
else $situacao = 'Reprovado';
setcookie('ex08_media', $media, time()+60);
?>
<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><title>Média</title><link rel="stylesheet" href="css/styles.css"></head><body><div class="container">
<h1>Média SGA</h1>
<div class="<?php echo ($media>=7)?'success':(($media>=5)?'warning':'error'); ?>">
  <?php echo "Média: " . number_format($media,2) . " — Situação: {$situacao}"; ?>
</div>
<?php if ($media < 7): ?>
<form method="post" action="exercicio8_rec.php">
  <label>Nota de Recuperação: <input type="number" step="any" name="rec" min="0" max="10" required></label>
  <input type="hidden" name="media_atual" value="<?php echo $media; ?>">
  <button type="submit">Calcular nova média</button>
</form>
<?php endif; ?>
<p class="small">Última média: <?php echo $_COOKIE['ex08_media'] ?? 'nenhum'; ?></p>
<p><a href="exercicio8.html">Voltar</a></p>
</div></body></html>
