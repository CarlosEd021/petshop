<?php
require_once '../../includes/auth.php';
require_once '../../config/api.php';

$clientes = apiRequest('/clientes');

include '../../includes/header.php';
include '../../includes/menu.php';
?>

<div class="container mt-4">

<h2>Relatório de Clientes</h2>

<table class="table table-striped table-bordered mt-4">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Nome</th>
<th>CPF</th>
<th>Telefone</th>
<th>E-mail</th>

</tr>

</thead>

<tbody>

<?php foreach($clientes as $cliente): ?>

<tr>

<td><?= $cliente['id'] ?></td>
<td><?= $cliente['nome'] ?></td>
<td><?= $cliente['cpf'] ?></td>
<td><?= $cliente['telefone'] ?></td>
<td><?= $cliente['email'] ?></td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

<?php include '../../includes/footer.php'; ?>