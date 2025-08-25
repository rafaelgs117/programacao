<?php
include_once("conectar.php"); // Conexão com o banco de dados
$pesquisa = $_POST['cidade']; // Recebe o valor do campo de pesquisa via POST
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Cidades</title>
</head>
<body> 
    <table border = "1" style = "width: 50%"> 
        <tr>
            <th>Nome</th>
            <th>Endereco</th>
            <th>cidade</th>
        </tr>
    

<?php
$sql = "SELECT * FROM alunos WHERE cidade LIKE '%$pesquisa%'"; // Consulta SQL para buscar cidades que contenham o termo de pesquisa
$resultado = mysqli_query($strcon, $sql); // Executa a consulta
while($registro = mysqli_fetch_array($resultado)) // Loop para exibir os resultados
{
    $nome = $registro['nome'];
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
</body>
</html>