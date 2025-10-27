<?php
require_once 'Conexao.php';

class Produto {
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $quantidade;

    public function __construct($nome, $descricao, $preco, $quantidade) {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function cadastrar() {
        $con = Conexao::getConexao();
        $sql = $con->prepare("INSERT INTO produtos (nome, descricao, preco, quantidade) VALUES (?, ?, ?, ?)");
        $sql->execute([$this->nome, $this->descricao, $this->preco, $this->quantidade]);
    }

    public static function listar() {
        $con = Conexao::getConexao();
        $sql = $con->query("SELECT * FROM produtos ORDER BY id DESC");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    // Exclusão com base no nome do produto
    public static function deletar($nome) {
        $con = Conexao::getConexao();
        $sql = $con->prepare("DELETE FROM produtos WHERE nome = ?");
        $sql->execute([$nome]);
    }
}
?>