<?php
class ProdutoInformatica {
    private $id, $nome, $descricao, $preco, $quantidade;
    public function __construct($nome='', $descricao='', $preco=0.0, $quantidade=0) {
        $this->nome=$nome; $this->descricao=$descricao; $this->preco=$preco; $this->quantidade=$quantidade;
    }
    public function getId(){return $this->id;} public function setId($id){$this->id=$id;}
    public function getNome(){return $this->nome;} public function setNome($n){$this->nome=$n;}
    public function getDescricao(){return $this->descricao;} public function setDescricao($d){$this->descricao=$d;}
    public function getPreco(){return $this->preco;} public function setPreco($p){$this->preco=$p;}
    public function getQuantidade(){return $this->quantidade;} public function setQuantidade($q){$this->quantidade=$q;}
}
?>
