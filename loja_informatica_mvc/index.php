
<?php
require_once __DIR__.'/config/conexao.php';
require_once __DIR__.'/controllers/ProdutoInformaticaController.php';
$controller=new ProdutoInformaticaController($pdo);
$controller->handleRequest();
?>
