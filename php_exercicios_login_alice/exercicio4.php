<?php
require_once 'includes/auth.php';
$a = isset($_POST['a']) ? (float)$_POST['a'] : null;
$b = isset($_POST['b']) ? (float)$_POST['b'] : null;
$op = $_POST['op'] ?? null;
if ($a===null || $b===null || $op===null) { header('Location: exercicio4.html'); exit; }
$res = '';
$erro = '';
switch ($op) {
    case '+': $res = $a + $b; break;
    case '-': $res = $a - $b; break;
    case '*': $res = $a * $b; break;
    case '/':
        if ($b == 0) $erro = 'Divisão por zero.';
        else $res = $a / $b;
        break;
    case '^': $res = pow($a, $b); break;
    case 'sqrt': $res = sqrt($a); break;
    default: $erro = 'Operação inválida.';
}
if ($erro === '') setcookie('ex04_ultimo', "$a $op $b = $res", time()+60);
?>
<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><title>Calculadora</title><link rel="stylesheet" href="css/styles.css"></head><body><div class="container">
<h1>Resultado</h1>
<?php if ($erro !== ''): ?><div class="error"><?php echo $erro; ?></div><?php else: ?>
  <div class="success"><?php echo "Resultado: {$a} {$op} {$b} = {$res}"; ?></div>
<?php endif; ?>
<p class="small">Último: <?php echo $_COOKIE['ex04_ultimo'] ?? 'nenhum'; ?></p>
<p><a href="exercicio4.html">Voltar</a></p>
</div></body></html>
