<?php
// classe moto
require_once 'veiculo.php'; // importa a classe veiculo assim a classe moto herda os atributos da classe pai veiculo

class moto extends veiculo { // classe filha moto que herda da classe veiculo
    private $cilindrada; // atributo especifico da classe moto

    public function __construct($marca, $modelo, $ano, $cilindrada) { // metodo construtor da classe moto
        parent::__construct($marca, $modelo, $ano); // chama o construtor da classe pai veiculo para inicializar os atributos herdados
        $this->cilindrada = $cilindrada; // inicializa o atributo especifico da classe moto
    }
    public function info() {
        return parent::info() . "Tipo: {$this->cilindrada}<br><strong>Tipo:</strong> Moto<br><hr>"; // chama o metodo info da classe pai e adiciona a informacao especifica da moto
    }
}
?>
