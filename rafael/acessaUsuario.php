<?php
require_once 'Usuario.php';

class AcessaUsuario {
    public function imprimeUsuario() {
        $usuario = new Usuario("Alice", "987.654.321-00", "Rua Aurora, 456");

        echo "<h3>Usuário Acessado</h3>";
        echo "Nome: " . $usuario->nome . "<br>";
        echo "CPF: " . $usuario->cpf . "<br>";
        echo "Endereço: " . $usuario->getEndereco() . "<br>";
    }
}

$acessa = new AcessaUsuario();
$acessa->imprimeUsuario();
?>