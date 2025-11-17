<!doctype html>
<html lang='pt-BR'><head><meta charset='utf-8'><meta name='viewport' content='width=device-width,initial-scale=1'><title>Login</title>
<link href='https://cdn.jsdelivr.net/npm/water.css@2/out/water.css' rel='stylesheet'></head><body>
<h1>Login</h1>
<?php if(isset($error)) echo "<p style='color:red'>".htmlspecialchars($error)."</p>"; ?>
<form method='post' action='?action=login'>
<label>Usuário: <input name='user' required></label><br>
<label>Senha: <input name='pass' type='password' required></label><br>
<button>Entrar</button>
</form>
</body></html>
