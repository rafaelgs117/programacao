<?php
require_once 'includes/auth.php';
require_once 'conexao.php';

$nome = $mysqli->real_escape_string($_POST['nome'] ?? '');
$matricula = $mysqli->real_escape_string($_POST['matricula'] ?? '');
$curso = $mysqli->real_escape_string($_POST['curso'] ?? '');
$email = $mysqli->real_escape_string($_POST['email'] ?? '');
$telefone = $mysqli->real_escape_string($_POST['telefone'] ?? '');
$endereco = $mysqli->real_escape_string($_POST['endereco'] ?? '');
$cep = $mysqli->real_escape_string($_POST['cep'] ?? '');
$cidade = $mysqli->real_escape_string($_POST['cidade'] ?? '');
$uf = $mysqli->real_escape_string($_POST['uf'] ?? '');
$curso_horas = $mysqli->real_escape_string($_POST['curso_horas'] ?? '');
$carga = isset($_POST['carga_horaria']) ? (int)$_POST['carga_horaria'] : 0;

if ($nome == '' || $matricula == '') {
    die('Nome e matrícula são obrigatórios. <a href="exercicio11.html">Voltar</a>');
}

$sql = "INSERT INTO alunos (nome, matricula, curso, email, telefone, endereco, cep, cidade, uf, curso_horas, carga_horaria)
        VALUES ('{$nome}','{$matricula}','{$curso}','{$email}','{$telefone}','{$endereco}','{$cep}','{$cidade}','{$uf}','{$curso_horas}', {$carga})";
if ($mysqli->query($sql)) {
    setcookie('ex11_ultimo', $matricula, time()+60);
    echo '<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><title>Sucesso</title><link rel="stylesheet" href="css/styles.css"></head><body><div class="container"><h1 class="success">Aluno cadastrado com sucesso!</h1><p><a href="exercicio11.html">Voltar</a></p></div></body></html>';
} else {
    echo 'Erro ao cadastrar: ' . $mysqli->error . ' <a href="exercicio11.html">Voltar</a>';
}
