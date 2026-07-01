<?php
require_once '../../includes/auth.php';
require_once '../../config/api.php';

$agendamentos = apiRequest('/agendamentos');

include '../../includes/header.php';
include '../../includes/menu.php';
?>

<div class="container mt-4">

<div class="d-flex justify-content-between align-items-center mb-3">

<h2>Agendamentos</h2>

<a href="cadastrar.php" class="btn btn-primary">
Novo Agendamento
</a>

</div>

<table class="table table-striped table-bordered">

<thead>

<tr>

<th>ID</th>
<th>Pet</th>
<th>Serviço</th>
<th>Data</th>
<th>Observação</th>
<th width="180">Ações</th>

</tr>

</thead>

<tbody>

<?php foreach($agendamentos as $agendamento): ?>

<tr>

<td><?= $agendamento['id'] ?></td>

<td><?= $agendamento['pet']['nome'] ?></td>

<td><?= $agendamento['servico']['nome'] ?></td>

<td><?= $agendamento['data'] ?></td>

<td><?= $agendamento['observacao'] ?></td>

<td>

<a href="editar.php?id=<?= $agendamento['id'] ?>"
class="btn btn-warning btn-sm">

Editar

</a>

<?php if($_SESSION['perfil']=="ADMINISTRADOR"): ?>

<a href="excluir.php?id=<?= $agendamento['id'] ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Deseja excluir este agendamento?')">

Excluir

</a>

<?php endif; ?>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

<?php include '../../includes/footer.php'; ?>