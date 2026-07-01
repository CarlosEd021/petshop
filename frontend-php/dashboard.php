<?php
require_once 'includes/auth.php';
require_once 'config/api.php';

$clientes = apiRequest('/clientes');
$pets = apiRequest('/pets');
$produtos = apiRequest('/produtos');
$servicos = apiRequest('/servicos');
$agendamentos = apiRequest('/agendamentos');

include 'includes/header.php';
include 'includes/menu.php';
?>

<div class="container mt-4">

    <h2 class="mb-4">Dashboard PSAF</h2>

    <div class="row g-4">

        <div class="col-md-2">
            <div class="card text-white bg-primary shadow">
                <div class="card-body text-center">
                    <h5>Clientes</h5>
                    <h2><?= count($clientes) ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="card text-white bg-success shadow">
                <div class="card-body text-center">
                    <h5>Pets</h5>
                    <h2><?= count($pets) ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="card text-white bg-warning shadow">
                <div class="card-body text-center">
                    <h5>Produtos</h5>
                    <h2><?= count($produtos) ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-info shadow">
                <div class="card-body text-center">
                    <h5>Serviços</h5>
                    <h2><?= count($servicos) ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-danger shadow">
                <div class="card-body text-center">
                    <h5>Agendamentos</h5>
                    <h2><?= count($agendamentos) ?></h2>
                </div>
            </div>
        </div>

    </div>

    <div class="card mt-5 shadow">

        <div class="card-header bg-dark text-white">
            Últimos Agendamentos
        </div>

        <div class="card-body">

            <table class="table table-striped">

                <thead>

                    <tr>

                        <th>Pet</th>
                        <th>Serviço</th>
                        <th>Data</th>
                        <th>Observação</th>

                    </tr>

                </thead>

                <tbody>

                    <?php
                    $ultimos = array_slice(array_reverse($agendamentos), 0, 5);

                    foreach ($ultimos as $agendamento):
                    ?>

                    <tr>

                        <td><?= $agendamento['pet']['nome'] ?? '' ?></td>

                        <td><?= $agendamento['servico']['nome'] ?? '' ?></td>

                        <td><?= $agendamento['data'] ?? '' ?></td>

                        <td><?= $agendamento['observacao'] ?? '' ?></td>

                    </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<?php include 'includes/footer.php'; ?>