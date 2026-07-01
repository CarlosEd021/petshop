<?php
require_once '../../includes/auth.php';
require_once '../../config/api.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $dados = [
        'nome' => $_POST['nome'],
        'cpf' => $_POST['cpf'],
        'telefone' => $_POST['telefone'],
        'email' => $_POST['email'],
        'endereco' => $_POST['endereco']
    ];

    apiRequest('/clientes', 'POST', $dados);

    header('Location: listar.php');
    exit;
}

include '../../includes/header.php';
include '../../includes/menu.php';

?>

<div class="container mt-4">

    <h2>Novo Cliente</h2>

    <form method="post">

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">CPF</label>
            <input type="text" name="cpf" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Endereço</label>
            <input type="text" name="endereco" class="form-control">
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