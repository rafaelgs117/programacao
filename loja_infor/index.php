<?php
require_once 'controller/ProdutoController.php';
$controller = new ProdutoController(); 

$acao = $_GET['acao'] ?? null;

if ($acao === 'cadastrar' && $_POST) {
    $controller->cadastrarProduto($_POST);
    header("Location: index.php");
    exit;
}

// metodo para excluir apartir do nome do produto
if ($acao === 'deletar' && isset($_GET['nome'])) {
    $controller->deletarProduto($_GET['nome']);
    header("Location: index.php");
    exit;
}

$produtos = $controller->listarProdutos();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Loja de Informática - MVC + OOP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Rafael Gonçalves da Silva</h1>
    <h1>Cadastro e Listagem de Produtos</h1>
    <?php include 'view/form_produto.php'; ?>
    <hr>
    <?php include 'view/listar_produtos.php'; ?>
</body>
</html>