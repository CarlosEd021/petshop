<?php
require_once '../../includes/auth.php';
require_once '../../config/api.php';

$pets = apiRequest('/pets');
$servicos = apiRequest('/servicos');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $dados = [
        'data' => $_POST['data'],
        'observacao' => $_POST['observacao'],
        'pet' => [
            'id' => (int) $_POST['pet']
        ],
        'servico' => [
            'id' => (int) $_POST['servico']
        ]
    ];

    apiRequest('/agendamentos', 'POST', $dados);

    header('Location: listar.php');
    exit;
}

include '../../includes/header.php';
include '../../includes/menu.php';

?>

<div class="container mt-4">

    <h2>Novo Agendamento</h2>

    <form method="post">

        <div class="mb-3">
            <label class="form-label">Pet</label>

            <select name="pet" class="form-select" required>

                <option value="">Selecione</option>

                <?php foreach ($pets as $pet): ?>

                    <option value="<?= $pet['id'] ?>">
                        <?= $pet['nome'] ?>
                    </option>

                <?php endforeach; ?>

            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Serviço</label>

            <select name="servico" class="form-select" required>

                <option value="">Selecione</option>

                <?php foreach ($servicos as $servico): ?>

                    <option value="<?= $servico['id'] ?>">
                        <?= $servico['nome'] ?>
                    </option>

                <?php endforeach; ?>

            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Data</label>

            <input type="date"
                   name="data"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Observação</label>

            <textarea name="observacao"
                      class="form-control"></textarea>
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