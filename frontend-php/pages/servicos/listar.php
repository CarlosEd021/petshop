<?php
require_once '../../includes/auth.php';
require_once '../../config/api.php';

$servicos = apiRequest('/servicos');

include '../../includes/header.php';
include '../../includes/menu.php';
?>

<div class="container mt-4">

<div class="d-flex justify-content-between align-items-center mb-3">

<h2>Serviços</h2>

<a href="cadastrar.php" class="btn btn-primary">
Novo Serviço
</a>

</div>

<table class="table table-striped table-bordered">

<thead>

<tr>

<th>ID</th>
<th>Nome</th>
<th>Descrição</th>
<th>Valor</th>
<th width="180">Ações</th>

</tr>

</thead>

<tbody>

<?php foreach($servicos as $servico): ?>

<tr>

<td><?= $servico['id'] ?></td>

<td><?= $servico['nome'] ?></td>

<td><?= $servico['descricao'] ?></td>

<td>
R$ <?= number_format($servico['valor'],2,',','.') ?>
</td>

<td>

<a href="editar.php?id=<?= $servico['id']?>"
class="btn btn-warning btn-sm">

Editar

</a>

<?php if($_SESSION['perfil']=="ADMINISTRADOR"): ?>

<a href="excluir.php?id=<?= $servico['id']?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Excluir serviço?')">

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