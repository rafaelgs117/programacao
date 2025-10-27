<?php
// login.php - processa formulário de login fixo (alice / 1234)
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario'] ?? '');
    $senha = trim($_POST['senha'] ?? '');
    if ($usuario === 'alice' && $senha === '1234') {
        $_SESSION['usuario'] = $usuario;
        header('Location: index.html');
        exit;
    } else {
        $erro = 'Usuário ou senha inválidos.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Login</title><link rel="stylesheet" href="css/styles.css"></head>
<body><div class="container">
  <h1>Login</h1>
  <?php if (!empty($erro)): ?><div class="error"><?php echo $erro; ?></div><?php endif; ?>
  <form method="post" action="login.php">
    <div class="form-row"><label>Usuário<input name="usuario" type="text" required></label></div>
    <div class="form-row"><label>Senha<input name="senha" type="password" required></label></div>
    <button type="submit">Entrar</button>
  </form>
  <p class="small">Login fixo: usuário <strong>alice</strong>, senha <strong>1234</strong>.</p>
</div></body>
</html>
