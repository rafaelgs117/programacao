<?php
require_once 'includes/auth.php';
require_once 'conexao.php';

$nome = $mysqli->real_escape_string($_POST['nome'] ?? '');
$mat = $mysqli->real_escape_string($_POST['matricula'] ?? '');
$email = $mysqli->real_escape_string($_POST['email'] ?? '');

$where = [];
if ($nome !== '') $where[] = "nome = '{$nome}'";
if ($mat !== '') $where[] = "matricula = '{$mat}'";
if ($email !== '') $where[] = "email = '{$email}'";
if (count($where) === 0) die('Informe ao menos um critério. <a href="exercicio12.html">Voltar</a>');

$sqls = [];
foreach ($where as $w) {
    $sqls[] = "DELETE FROM alunos WHERE {$w} LIMIT 1";
}
$errors = [];
foreach ($sqls as $s) {
    if (!$mysqli->query($s)) $errors[] = $mysqli->error;
}
if (count($errors)===0) {
    echo '<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><title>Exclusão</title><link rel="stylesheet" href="css/styles.css"></head><body><div class="container"><h1 class="success">Registro(s) excluído(s)</h1><p><a href="exercicio12.html">Voltar</a></p></div></body></html>';
} else {
    echo 'Erro(s): ' . implode('; ', $errors);
}
