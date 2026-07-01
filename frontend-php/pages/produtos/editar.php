<?php

require_once '../../includes/auth.php';
require_once '../../config/api.php';

$id=$_GET['id'];

if($_SERVER['REQUEST_METHOD']=="POST"){

    $dados=[

        "nome"=>$_POST['nome'],
        "descricao"=>$_POST['descricao'],
        "preco"=>$_POST['preco'],
        "estoque"=>$_POST['estoque']

    ];

    apiRequest("/produtos/$id","PUT",$dados);

    header("Location:listar.php");
    exit;

}

$produto=apiRequest("/produtos/$id");

include '../../includes/header.php';
include '../../includes/menu.php';

?>

<div class="container mt-4">

<h2>Editar Produto</h2>

<form method="post">

<div class="mb-3">
<label>Nome</label>
<input type="text"
name="nome"
class="form-control"
value="<?= $produto['nome']?>"
required>
</div>

<div class="mb-3">
<label>Descrição</label>
<input type="text"
name="descricao"
class="form-control"
value="<?= $produto['descricao']?>"
required>
</div>

<div class="mb-3">
<label>Preço</label>
<input type="number"
step="0.01"
name="preco"
class="form-control"
value="<?= $produto['preco']?>"
required>
</div>

<div class="mb-3">
<label>Estoque</label>
<input type="number"
name="estoque"
class="form-control"
value="<?= $produto['estoque']?>"
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