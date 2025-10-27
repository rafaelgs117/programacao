<?php
require_once 'includes/auth.php';
$nome = trim($_POST['nome'] ?? '');
$idade = isset($_POST['idade']) ? (int)$_POST['idade'] : null;
if ($nome === '' || $idade === null) { header('Location: exercicio9.html'); exit; }
setcookie('ex09_ultimo', "{$nome},{$idade}", time()+60);
if ($idade <= 12) $classe='resultado-zero'; $cat='criança';
if ($idade >=13 && $idade <=17) { $classe='resultado-impar'; $cat='adolescente'; }
if ($idade >=18 && $idade <=59) { $classe='resultado-pos'; $cat='adulto'; }
if ($idade >=60) { $classe='warning'; $cat='idoso'; }
?>
<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><title>Maioridade</title><link rel="stylesheet" href="css/styles.css"></head><body><div class="container">
<h1>Verificação de Idade</h1>
<div class="<?php echo $classe; ?>"><?php echo "{$nome} é {$cat} e tem {$idade} anos."; ?></div>
<p class="small">Último: <?php echo $_COOKIE['ex09_ultimo'] ?? 'nenhum'; ?></p>
<p><a href="exercicio9.html">Voltar</a></p>
</div></body></html>
