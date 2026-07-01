<?php
require_once '../../includes/auth.php';
require_once '../../config/api.php';

$produtos = apiRequest('/produtos');

include '../../includes/header.php';
include '../../includes/menu.php';
?>

<div class="container mt-4">

<h2>Relatório de Produtos</h2>

<table class="table table-striped table-bordered mt-4">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Produto</th>
<th>Preço</th>
<th>Estoque</th>

</tr>

</thead>

<tbody>

<?php foreach($produtos as $produto): ?>

<tr>

<td><?= $produto['id'] ?></td>

<td><?= $produto['nome'] ?></td>

<td>
R$ <?= number_format($produto['preco'],2,',','.') ?>
</td>

<td><?= $produto['estoque'] ?></td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

<?php include '../../includes/footer.php'; ?>