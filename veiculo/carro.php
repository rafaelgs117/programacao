<?php
//classe carro
require_once 'veiculo.php'; // importa a classe veiculo assim a classe carro herda os atributos da classe pai veiculo

class carro extends veiculo { // classe filha carro que herda da classe veiculo
    private $numPortas; // atributo especifico da classe carro

    public function __construct($marca, $modelo, $ano, $numPortas) { // metodo construtor da classe carro
        parent::__construct($marca, $modelo, $ano); // chama o construtor da classe pai veiculo para inicializar os atributos herdados
        $this->numPortas = $numPortas; // inicializa o atributo especifico da classe carro
    }
    public function info() {
        return parent::info() . "Número de Portas: {$this->numPortas}<br><strong>Tipo:</strong> Carro<br><hr>"; // chama o metodo info da classe pai e adiciona a informacao especifica do carro
    }
}
?>