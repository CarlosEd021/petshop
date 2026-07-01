<?php

require_once '../../includes/auth.php';
require_once '../../config/api.php';

$id=$_GET['id'];

$pets=apiRequest('/pets');
$servicos=apiRequest('/servicos');

if($_SERVER['REQUEST_METHOD']=="POST"){

    $dados=[

        "data"=>$_POST['data'],
        "observacao"=>$_POST['observacao'],

        "pet"=>[
            "id"=>(int)$_POST['pet']
        ],

        "servico"=>[
            "id"=>(int)$_POST['servico']
        ]

    ];

    apiRequest("/agendamentos/$id","PUT",$dados);

    header("Location:listar.php");
    exit;

}

$agendamento=apiRequest("/agendamentos/$id");

include '../../includes/header.php';
include '../../includes/menu.php';

?>

<div class="container mt-4">

<h2>Editar Agendamento</h2>

<form method="post">

<div class="mb-3">

<label>Pet</label>

<select name="pet" class="form-select">

<?php foreach($pets as $pet): ?>

<option
value="<?= $pet['id']?>"
<?= ($pet['id']==$agendamento['pet']['id'])?'selected':'' ?>>

<?= $pet['nome'] ?>

</option>

<?php endforeach; ?>

</select>

</div>

<div class="mb-3">

<label>Serviço</label>

<select name="servico" class="form-select">

<?php foreach($servicos as $servico): ?>

<option
value="<?= $servico['id']?>"
<?= ($servico['id']==$agendamento['servico']['id'])?'selected':'' ?>>

<?= $servico['nome'] ?>

</option>

<?php endforeach; ?>

</select>

</div>

<div class="mb-3">

<label>Data</label>

<input
type="date"
name="data"
class="form-control"
value="<?= $agendamento['data']?>">

</div>

<div class="mb-3">

<label>Observação</label>

<textarea
name="observacao"
class="form-control"><?= $agendamento['observacao']?></textarea>

</div>

<button class="btn btn-success">

Salvar

</button>

<a href="listar.php"
class="btn btn-secondary">

Cancelar

</a>

</form>

</div>

<?php include '../../includes/footer.php'; ?>