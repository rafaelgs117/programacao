<?php
// classe pai denomida veiculo
class veiculo { // atributos que serao herdados pelas classes filhas
    protected $marca; // tudo que esta em protected so pode ser acessado por classes filhas 
    protected $modelo;
    protected $ano;

    public function __construct($marca, $modelo, $ano) { // metodo construtor
        $this->marca = $marca; // o $this se refere ao objeto que esta sendo instanciado e recebera os valores passados como parametro
        $this->modelo = $modelo;
        $this->ano = $ano;
    }
    public function info() { // metodo que retorna as informacoes do veiculo
        return "Marca: {$this->marca}<br>Modelo: {$this->modelo}<br>Ano: {$this->ano}<br>"; // retorna as informacoes formatadas no formulario html
    }
}
?>