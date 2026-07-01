<?php
require_once '../../includes/auth.php';
require_once '../../config/api.php';

$pets = apiRequest('/pets');

include '../../includes/header.php';
include '../../includes/menu.php';
?>

<div class="container mt-4">

<h2>Relatório de Pets</h2>

<table class="table table-striped table-bordered mt-4">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Nome</th>
<th>Espécie</th>
<th>Raça</th>
<th>Dono</th>

</tr>

</thead>

<tbody>

<?php foreach($pets as $pet): ?>

<tr>

<td><?= $pet['id'] ?></td>

<td><?= $pet['nome'] ?></td>

<td><?= $pet['especie'] ?></td>

<td><?= $pet['raca'] ?></td>

<td><?= $pet['cliente']['nome'] ?? '' ?></td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

<?php include '../../includes/footer.php'; ?>