<?php
require_once '../../includes/auth.php';
require_once '../../config/api.php';

$produtos = apiRequest('/produtos');

include '../../includes/header.php';
include '../../includes/menu.php';
?>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>Produtos</h2>

        <a href="cadastrar.php" class="btn btn-primary">
            Novo Produto
        </a>

    </div>

    <table class="table table-striped table-bordered">

        <thead>

        <tr>

            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th width="180">Ações</th>

        </tr>

        </thead>

        <tbody>

        <?php foreach($produtos as $produto): ?>

            <tr>

                <td><?= $produto['id'] ?></td>

                <td><?= $produto['nome'] ?></td>

                <td><?= $produto['descricao'] ?></td>

                <td>R$ <?= number_format($produto['preco'],2,',','.') ?></td>

                <td><?= $produto['estoque'] ?></td>

                <td>

                    <a href="editar.php?id=<?= $produto['id'] ?>"
                       class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <?php if($_SESSION['perfil']=="ADMINISTRADOR"): ?>

                        <a href="excluir.php?id=<?= $produto['id'] ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Deseja excluir este produto?')">
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