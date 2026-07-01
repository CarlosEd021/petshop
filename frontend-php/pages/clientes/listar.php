<?php
require_once '../../includes/auth.php';
require_once '../../config/api.php';

$clientes = apiRequest('/clientes');

include '../../includes/header.php';
include '../../includes/menu.php';
?>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>Clientes</h2>

        <a href="cadastrar.php" class="btn btn-primary">
            Novo Cliente
        </a>

    </div>

    <table class="table table-striped table-bordered">

        <thead>

        <tr>

            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Email</th>
            <th width="180">Ações</th>

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

                <td>

                    <a href="editar.php?id=<?= $cliente['id'] ?>"
                       class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <?php if($_SESSION['perfil']=="ADMINISTRADOR"): ?>

                        <a href="excluir.php?id=<?= $cliente['id'] ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Deseja realmente excluir este cliente?')">
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