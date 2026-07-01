<?php
require_once '../../includes/auth.php';
require_once '../../config/api.php';

$agendamentos = apiRequest('/agendamentos');

include '../../includes/header.php';
include '../../includes/menu.php';
?>

<div class="container mt-4">

<h2>Relatório de Agendamentos</h2>

<table class="table table-striped table-bordered mt-4">

<thead class="table-dark">

<tr>

<th>Pet</th>
<th>Serviço</th>
<th>Data</th>
<th>Observação</th>

</tr>

</thead>

<tbody>

<?php foreach($agendamentos as $agendamento): ?>

<tr>

<td><?= $agendamento['pet']['nome'] ?></td>

<td><?= $agendamento['servico']['nome'] ?></td>

<td><?= date('d/m/Y',strtotime($agendamento['data'])) ?></td>

<td><?= $agendamento['observacao'] ?></td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

<?php include '../../includes/footer.php'; ?>