<?php
require_once __DIR__ . '/../model/Produto.php';

class ProdutoController {

    public function cadastrarProduto($dados) {
        $produto = new Produto(
            $dados['nome'],
            $dados['descricao'],
            $dados['preco'],
            $dados['quantidade']
        );
        $produto->cadastrar();
    }

    public function listarProdutos() {
        return Produto::listar();
    }

    // Deletar produto com base no nome
    public function deletarProduto($nome) {
        Produto::deletar($nome);
    }
}
?>