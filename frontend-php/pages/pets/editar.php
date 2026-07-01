<?php

require_once '../../includes/auth.php';
require_once '../../config/api.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $dados = [

        "nome" => $_POST['nome'],
        "especie" => $_POST['especie'],
        "raca" => $_POST['raca'],
        "idade" => $_POST['idade']

    ];

    apiRequest("/pets/$id", "PUT", $dados);

    header("Location: listar.php");
    exit;
}

$pet = apiRequest("/pets/$id");

include '../../includes/header.php';
include '../../includes/menu.php';

?>

<div class="container mt-4">

    <h2>Editar Pet</h2>

    <form method="post">

        <div class="mb-3">

            <label>Nome</label>

            <input
                type="text"
                name="nome"
                class="form-control"
                value="<?= $pet['nome'] ?>"
                required>

        </div>

        <div class="mb-3">

            <label>Espécie</label>

            <input
                type="text"
                name="especie"
                class="form-control"
                value="<?= $pet['especie'] ?>"
                required>

        </div>

        <div class="mb-3">

            <label>Raça</label>

            <input
                type="text"
                name="raca"
                class="form-control"
                value="<?= $pet['raca'] ?>"
                required>

        </div>

        <div class="mb-3">

            <label>Idade</label>

            <input
                type="number"
                name="idade"
                class="form-control"
                value="<?= $pet['idade'] ?>"
                required>

        </div>

        <button class="btn btn-success">
            Salvar
        </button>

        <a href="listar.php" class="btn btn-secondary">
            Cancelar
        </a>

    </form>

</div>

<?php include '../../includes/footer.php'; ?>