<?php
require_once 'includes/auth.php';
require_once 'conexao.php';

$mat = $mysqli->real_escape_string($_POST['matricula'] ?? '');
$horas = isset($_POST['horas']) ? (int)$_POST['horas'] : 0;
if ($mat == '') { die('Matrícula obrigatória. <a href="exercicio11.html">Voltar</a>'); }

$sql = "SELECT carga_horaria FROM alunos WHERE matricula = '{$mat}' LIMIT 1";
$res = $mysqli->query($sql);
if ($res && $res->num_rows > 0) {
    $row = $res->fetch_assoc();
    $novo = (int)$row['carga_horaria'] + $horas;
    $up = "UPDATE alunos SET carga_horaria = {$novo} WHERE matricula = '{$mat}'";
    if ($mysqli->query($up)) {
        echo '<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><title>Atualizado</title><link rel="stylesheet" href="css/styles.css"></head><body><div class="container"><h1 class="success">Carga atualizada! Novo total: ' . $novo . ' horas</h1><p><a href="exercicio11.html">Voltar</a></p></div></body></html>';
    } else echo 'Erro ao atualizar: ' . $mysqli->error;
} else {
    echo 'Aluno não encontrado. <a href="exercicio11.html">Voltar</a>';
}
