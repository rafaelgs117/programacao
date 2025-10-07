<?php

include_once("conexao.php");


function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

//  INSERÇÃO 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $descricao = trim($_POST['descricao'] ?? '');
    $preco = floatval($_POST['preco'] ?? 0);
    $quantidade = intval($_POST['quantidade'] ?? 0);

    if ($nome !== '' && $preco > 0 && $quantidade >= 0) {
        $sql = "INSERT INTO produtos (nome, descricao, preco, quantidade) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            die("Erro na preparação: " . $conn->error);
        }
        $stmt->bind_param("ssdi", $nome, $descricao, $preco, $quantidade);
        if ($stmt->execute()) {
            header("Location: manipular_bd.php?msg=1");
            exit;
        } else {
            die("Erro ao inserir: " . $stmt->error);
        }
    } else {
        echo "<p style='color:red'>Preencha todos os campos corretamente.</p>";
    }
}

//  EXCLUSÃO 
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    if ($id > 0) {
        $stmt = $conn->prepare("DELETE FROM produtos WHERE id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            header("Location: manipular_bd.php?msg=2");
            exit;
        } else {
            die("Erro ao excluir: " . $stmt->error);
        }
    }
}

//  LISTAGEM 
$sql = "SELECT id, nome, descricao, preco, quantidade FROM produtos ORDER BY id DESC";
$result = $conn->query($sql);
$produtos = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $produtos[] = $row;
    }
    $result->free();
}

//  TOTAIS 
$sql_totais = "SELECT 
                  COALESCE(SUM(quantidade), 0) AS total_quantidade,
                  COALESCE(SUM(preco * quantidade), 0) AS valor_total
               FROM produtos";
$res_totais = $conn->query($sql_totais);
$total_quantidade = 0;
$valor_total = 0;
if ($res_totais) {
    $tot = $res_totais->fetch_assoc();
    $total_quantidade = $tot['total_quantidade'];
    $valor_total = $tot['valor_total'];
    $res_totais->free();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Listagem de Produtos</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Produtos Cadastrados</h2>

  <?php if (isset($_GET['msg']) && $_GET['msg']=='1'): ?>
    <p style="color:green">✅ Produto cadastrado com sucesso!</p>
  <?php elseif (isset($_GET['msg']) && $_GET['msg']=='2'): ?>
    <p style="color:green">🗑️ Produto excluído com sucesso!</p>
  <?php endif; ?>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço (R$)</th>
        <th>Quantidade</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
    <?php if (count($produtos) === 0): ?>
      <tr><td colspan="6">Nenhum produto cadastrado.</td></tr>
    <?php else: ?>
      <?php foreach ($produtos as $p): ?>
        <tr>
          <td><?= h($p['id']) ?></td>
          <td><?= h($p['nome']) ?></td>
          <td><?= h($p['descricao']) ?></td>
          <td><?= number_format($p['preco'], 2, ',', '.') ?></td>
          <td><?= h($p['quantidade']) ?></td>
          <td><a href="manipular_bd.php?delete=<?= h($p['id']) ?>" onclick="return confirm('Confirmar exclusão do produto ID <?= h($p['id']) ?>?')">Excluir</a></td>
        </tr>
      <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="4" style="text-align:right">Quantidade Total:</td>
        <td colspan="2"><?= h($total_quantidade) ?></td>
      </tr>
      <tr>
        <td colspan="4" style="text-align:right">💰 Valor Total (R$):</td>
        <td colspan="2"><?= number_format($valor_total, 2, ',', '.') ?></td>
      </tr>
    </tfoot>
  </table>

  <p><a href="index.html">⬅️ Novo cadastro</a></p>
</div>
</body>
</html>

