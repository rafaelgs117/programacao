<?php 
$servername = "localhost"; // Nome do servidor
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados , sem para nao dar problema no xampp
$dbname = "bd2"; // Nome do banco de dados

$strcon = mysqli_connect($servername, $username, $password, $dbname); // Conexão com o banco de dados

if (!$strcon) { // Verifica se a conexão foi bem sucedida
    die("Conexão falhou: " . mysqli_connect_error()); // Se a conexão falhar ou nao tiver exibe a mensagem de erro
}
echo "Conectado com sucesso"; // Se a conexão for bem sucedida exibe a mensagem de sucesso
?>

