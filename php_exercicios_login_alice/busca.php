<?php
require_once 'includes/auth.php';
require_once 'conexao.php';

$nome = $mysqli->real_escape_string($_GET['nome'] ?? '');
$mat = $mysqli->real_escape_string($_GET['matricula'] ?? '');
$email = $mysqli->real_escape_string($_GET['email'] ?? '');

$where = [];
if ($nome !== '') $where[] = "nome LIKE '%{$nome}%'";
if ($mat !== '') $where[] = "matricula = '{$mat}'";
if ($email !== '') $where[] = "email = '{$email}'";
$sql = 'SELECT * FROM alunos' . (count($where)>0 ? ' WHERE ' . implode(' OR ', $where) : '') . ' ORDER BY nome';
$res = $mysqli->query($sql);
?>
<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><title>Busca</title><link rel="stylesheet" href="css/styles.css"></head><body><div class="container">
<h1>Resultado da busca</h1>
<?php if ($res && $res->num_rows>0): ?>
<table class="table"><thead><tr><th>Nome</th><th>Matrícula</th><th>Curso</th><th>E-mail</th><th>Telefone</th><th>CEP</th><th>Cidade</th><th>UF</th><th>Carga</th></tr></thead><tbody>
<?php while($row = $res->fetch_assoc()): ?>
<tr>
<td><?php echo htmlspecialchars($row['nome']); ?></td>
<td><?php echo htmlspecialchars($row['matricula']); ?></td>
<td><?php echo htmlspecialchars($row['curso']); ?></td>
<td><?php echo htmlspecialchars($row['email']); ?></td>
<td><?php echo htmlspecialchars($row['telefone']); ?></td>
<td><?php echo htmlspecialchars($row['cep']); ?></td>
<td><?php echo htmlspecialchars($row['cidade']); ?></td>
<td><?php echo htmlspecialchars($row['uf']); ?></td>
<td><?php echo (int)$row['carga_horaria']; ?></td>
</tr>
<?php endwhile; ?>
</tbody></table>
<?php else: ?>
<p>Nenhum registro encontrado.</p>
<?php endif; ?>
<p><a href="exercicio12.html">Voltar</a></p>
</div></body></html>
