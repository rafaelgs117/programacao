<?php
include 'database.php'; // Inclui o arquivo de conexão com o banco de dados

// Verifica se a consulta foi bem-sucedida
$result = $conn->query("SELECT * FROM usuarios");

if ($result && $result->num_rows > 0) { // Verifica se há resultados
    echo "<h1>Arquivos Enviados</h1>";
    while ($row = $result->fetch_assoc()) { // Itera sobre os resultados
        // Verifica se as colunas 'nome' e 'foto_perfil' existem na linha atual
        $nome = isset($row['nome']) ? $row['nome'] : 'Nome não disponível';
        $fotoPerfil = isset($row['foto_perfil']) ? $row['foto_perfil'] : null;

        echo "<p>$nome</p>"; // Exibe o nome do usuário
        if ($fotoPerfil) {
            echo "<img src='$fotoPerfil' alt='Foto de $nome' width='150px'><br>"; // Exibe a foto do perfil
        } else {
            echo "<p>Foto não disponível</p>";
        }
        echo "<a href='delete.php?id={$row['id']}'>Deletar</a><br>"; // Link para deletar o arquivo
    }
} else {
    echo "<p>Nenhum arquivo enviado.</p>"; // Mensagem se não houver registros
    echo "<br><a href='upload.php'><button>Voltar</button></a>"; // Botão de Voltar
}

$conn->close(); // Fecha a conexão com o banco de dados
?>

<!-- Botão para voltar ao index -->
<br>
<button onclick="window.location.href='index.html'">Voltar</button>