<?php
require_once '../../includes/auth.php';
require_once '../../config/api.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $dados = [
        'nome' => $_POST['nome'],
        'descricao' => $_POST['descricao'],
        'valor' => (float) $_POST['valor']
    ];

    apiRequest('/servicos', 'POST', $dados);

    header('Location: listar.php');
    exit;
}

include '../../includes/header.php';
include '../../includes/menu.php';

?>

<div class="container mt-4">

    <h2>Novo Serviço</h2>

    <form method="post">

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Descrição</label>
            <input type="text" name="descricao" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Valor</label>
            <input type="number" step="0.01" name="valor" class="form-control" required>
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