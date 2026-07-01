<?php

require_once '../../includes/auth.php';
require_once '../../config/api.php';

$id=$_GET['id'];

if($_SERVER['REQUEST_METHOD']=="POST"){

    $dados=[

        "nome"=>$_POST['nome'],
        "descricao"=>$_POST['descricao'],
        "valor"=>$_POST['valor']

    ];

    apiRequest("/servicos/$id","PUT",$dados);

    header("Location:listar.php");
    exit;
}

$servico=apiRequest("/servicos/$id");

include '../../includes/header.php';
include '../../includes/menu.php';

?>

<div class="container mt-4">

<h2>Editar Serviço</h2>

<form method="post">

<div class="mb-3">

<label>Nome</label>

<input
type="text"
name="nome"
class="form-control"
value="<?= $servico['nome']?>"
required>

</div>

<div class="mb-3">

<label>Descrição</label>

<input
type="text"
name="descricao"
class="form-control"
value="<?= $servico['descricao']?>"
required>

</div>

<div class="mb-3">

<label>Valor</label>

<input
type="number"
step="0.01"
name="valor"
class="form-control"
value="<?= $servico['valor']?>"
required>

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