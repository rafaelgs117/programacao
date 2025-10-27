<?php
class Usuario {  
    public $nome;
    public $cpf;
    private $endereco;

    public function __construct($nome, $cpf, $endereco) {  
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    public function getEndereco() {
        return $this->endereco;
    }
}
?>

