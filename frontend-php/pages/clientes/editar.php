<?php

require_once '../../includes/auth.php';
require_once '../../config/api.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $dados = [

        "nome" => $_POST['nome'],
        "cpf" => $_POST['cpf'],
        "telefone" => $_POST['telefone'],
        "email" => $_POST['email'],
        "endereco" => $_POST['endereco']

    ];

    apiRequest("/clientes/$id", "PUT", $dados);

    header("Location: listar.php");
    exit;
}

$cliente = apiRequest("/clientes/$id");

include '../../includes/header.php';
include '../../includes/menu.php';

?>

<div class="container mt-4">

    <h2>Editar Cliente</h2>

    <form method="post">

        <div class="mb-3">
            <label>Nome</label>
            <input type="text"
                   name="nome"
                   class="form-control"
                   value="<?= $cliente['nome'] ?>"
                   required>
        </div>

        <div class="mb-3">
            <label>CPF</label>
            <input type="text"
                   name="cpf"
                   class="form-control"
                   value="<?= $cliente['cpf'] ?>"
                   required>
        </div>

        <div class="mb-3">
            <label>Telefone</label>
            <input type="text"
                   name="telefone"
                   class="form-control"
                   value="<?= $cliente['telefone'] ?>"
                   required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   value="<?= $cliente['email'] ?>"
                   required>
        </div>

        <div class="mb-3">
            <label>Endereço</label>
            <input type="text"
                   name="endereco"
                   class="form-control"
                   value="<?= $cliente['endereco'] ?>"
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