<?php
require_once 'includes/auth.php';
$rec = isset($_POST['rec']) ? (float)$_POST['rec'] : null;
$media = isset($_POST['media_atual']) ? (float)$_POST['media_atual'] : null;
if ($rec === null || $media === null) { header('Location: exercicio8.html'); exit; }
$nova = ($media + $rec) / 2;
setcookie('ex08_media', $nova, time()+60);
?>
<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><title>Recuperação</title><link rel="stylesheet" href="css/styles.css"></head><body><div class="container">
<h1>Recuperação</h1>
<div class="<?php echo ($nova>=7)?'success':(($nova>=5)?'warning':'error'); ?>">
  <?php echo "Nova média: " . number_format($nova,2); ?>
</div>
<p><a href="exercicio8.html">Voltar</a></p>
</div></body></html>
