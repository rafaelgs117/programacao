<?php
// Ajuste as credenciais conforme seu ambiente XAMPP
$dbHost = '127.0.0.1';
$dbName = 'farmacia';
$dbUser = 'root';
$dbPass = '';

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4";
try {
    $pdo = new PDO($dsn, $dbUser, $dbPass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    echo "<h2>Erro ao conectar ao banco de dados:</h2>";
    echo "<p>".htmlspecialchars($e->getMessage())."</p>";
    echo "<p>Execute o arquivo <code>create_db.sql</code> no phpMyAdmin para criar o banco e a tabela, e depois atualize as credenciais em config/db.php.</p>";
    exit;
}
