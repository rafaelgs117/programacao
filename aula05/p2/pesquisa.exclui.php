<?php
include_once("conectar.php"); // Conexão com o banco de dados
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Cidades</title>
    <style>

    </style>
</head>
<body> 
    <table border = "1" style = "width: 50%"> <!-- Cria uma tabela com borda e largura de 50% -->
        <tr>
            <th>Nome</th>
            <th>Endereco</th>
            <th>cidade</th>
        </tr>
    

<?php
$sql = "SELECT * FROM alunos"; // Consulta SQL para selecionar todos os registros da tabela alunos
$resultado = mysqli_query($strcon, $sql); // Executa a consulta
while($registro = mysqli_fetch_array($resultado)) // Loop para exibir os resultados
{
    $nome = $registro['nome']; // Armazena o valor do campo nome na variável $nome o mesmo para as debaixo
    $endereco = $registro['endereco']; 
    $cidade = $registro['cidade'];
    echo "<tr>";
    echo "<td>  $nome  </td>";
    echo "<td>  $endereco  </td>";
    echo "<td>  $cidade  </td>";
    echo "</tr>";
}
mysqli_close($strcon); // Fecha a conexão com o banco de dados
echo "</table>"; // Fecha a tabela
?>
<form name = "excluir" action = "exclui.php" method = "post">
    <p>Digite o nome que deseja excluir:
    <input type = "text" name = "nome" /></p> <!-- Campo de texto para digitar o nome a ser excluído -->
    <input type = "submit" name = "Botao" value = "Enviar" /> <!-- Botão para enviar o formulário -->
</form>
<script></script>
</body>
</html>