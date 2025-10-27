<?php
require_once 'includes/auth.php';
$n = isset($_POST['numero']) ? (int)$_POST['numero'] : null;
if ($n===null) { header('Location: exercicio3.html'); exit; }
if ($n<0 || $n>20) {
    $erro = 'Número inválido. Informe um número entre 0 e 20.';
} else {
    function fat($x) { if ($x <= 1) return 1; return $x * fat($x-1); }
    $seq = [];
    for ($i=$n; $i>=1; $i--) $seq[] = $i;
    $seq_str = implode(' × ', $seq) . ($n>0 ? ' × 1' : '1');
    $resultado = fat($n);
    setcookie('ex03_ultimo', $n, time()+60);
}
?>
<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><title>Fatorial</title><link rel="stylesheet" href="css/styles.css"></head><body><div class="container">
<h1>Fatorial de <?php echo htmlspecialchars($n); ?></h1>
<?php if (!empty($erro)): ?><div class="error"><?php echo $erro; ?></div><?php else: ?>
  <div class="success"><?php echo "{$n}! = " . ($n>0 ? $seq_str : '1') . " = {$resultado}"; ?></div>
<?php endif; ?>
<p class="small">Último: <?php echo $_COOKIE['ex03_ultimo'] ?? 'nenhum'; ?></p>
<p><a href="exercicio3.html">Voltar</a></p>
</div></body></html>
