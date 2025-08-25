<?php
include_once("conectar.php"); // Conexão com o banco de dados
$nome = $_POST['nome']; // Recebe o valor do campo nome via POST
$sql = "DELETE FROM alunos WHERE nome = '$nome'"; // Consulta SQL para excluir o registro com o nome especificado
$resultado = mysqli_query($strcon, $sql); // Executa a consulta
echo "Registro excluído com sucesso."; // Mensagem de sucesso
mysqli_close($strcon); // Fecha a conexão com o banco de dados
?>
<br><br> <!-- Quebra de linha para jogar o botão abaixo -->
<a href="pesquisa.exclui.php">
    <button>Voltar</button>
</a>