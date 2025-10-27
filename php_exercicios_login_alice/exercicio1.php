<?php
require_once 'includes/auth.php';
$numero = $_POST['numero'] ?? null;
if ($numero === null) {
    header('Location: exercicio1.html');
    exit;
}
setcookie('ex01_ultimo', $numero, time()+60);
$numero = (float)$numero;
$classe = '';
$msg = '';
if ($numero > 0) { $classe='resultado-pos'; $msg='Valor positivo'; }
elseif ($numero < 0) { $classe='resultado-neg'; $msg='Valor negativo'; }
else { $classe='resultado-zero'; $msg='Igual a zero'; }
?>
<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><title>Ex1</title><link rel="stylesheet" href="css/styles.css"></head><body><div class="container">
<h1>Resultado - Exercício 1</h1>
<div class="<?php echo $classe; ?>"><?php echo $msg; ?></div>
<p class="small">Último número: <?php echo $_COOKIE['ex01_ultimo'] ?? 'nenhum'; ?></p>
<p><a href="exercicio1.html">Voltar</a></p>
</div></body></html>
