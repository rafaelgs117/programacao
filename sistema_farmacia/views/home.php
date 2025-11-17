<?php include __DIR__ . '/header.php'; ?>
<h1>Painel - Sistema Farmácia</h1>
<p>Bem-vindo, <?php echo htmlspecialchars($_SESSION['user'] ?? 'Usuário'); ?></p>
<?php include __DIR__ . '/footer.php'; ?>
