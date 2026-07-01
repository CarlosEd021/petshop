<?php
require_once '../../includes/auth.php';
require_once '../../config/api.php';

$pets = apiRequest('/pets');

include '../../includes/header.php';
include '../../includes/menu.php';
?>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>Pets</h2>

        <a href="cadastrar.php" class="btn btn-primary">
            Novo Pet
        </a>

    </div>

    <table class="table table-striped table-bordered">

        <thead>

        <tr>

            <th>ID</th>
            <th>Nome</th>
            <th>Espécie</th>
            <th>Raça</th>
            <th>Idade</th>
            <th width="180">Ações</th>

        </tr>

        </thead>

        <tbody>

        <?php foreach($pets as $pet): ?>

            <tr>

                <td><?= $pet['id'] ?></td>
                <td><?= $pet['nome'] ?></td>
                <td><?= $pet['especie'] ?></td>
                <td><?= $pet['raca'] ?></td>
                <td><?= $pet['idade'] ?></td>

                <td>

                    <a href="editar.php?id=<?= $pet['id'] ?>"
                       class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <?php if($_SESSION['perfil']=="ADMINISTRADOR"): ?>

                        <a href="excluir.php?id=<?= $pet['id'] ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Deseja excluir este pet?')">
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