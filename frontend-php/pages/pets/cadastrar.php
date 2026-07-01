<?php
require_once '../../includes/auth.php';
require_once '../../config/api.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $dados = [
        'nome' => $_POST['nome'],
        'especie' => $_POST['especie'],
        'raca' => $_POST['raca'],
        'idade' => (int) $_POST['idade']
    ];

    apiRequest('/pets', 'POST', $dados);

    header('Location: listar.php');
    exit;
}

include '../../includes/header.php';
include '../../includes/menu.php';

?>

<div class="container mt-4">

    <h2>Novo Pet</h2>

    <form method="post">

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Espécie</label>
            <input type="text" name="especie" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Raça</label>
            <input type="text" name="raca" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Idade</label>
            <input type="number" name="idade" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">
            Salvar
        </button>

        <a href="listar.php" class="btn btn-secondary">
            Voltar
        </a>

    </form>

</div>

<?php include '../../includes/footer.php'; ?>