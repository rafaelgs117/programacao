<?php
require_once 'Usuario.php';

$usuario = new Usuario("Alice", "123.456.789-00", "Rua Aurora, 123");

echo "<h3>Dados do Usuário</h3>";
echo "Nome: " . $usuario->nome . "<br>";
echo "CPF: " . $usuario->cpf . "<br>";
echo "Endereço: " . $usuario->getEndereco() . "<br>";
?>