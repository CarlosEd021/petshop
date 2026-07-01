<?php

require_once '../../includes/auth.php';
require_once '../../config/api.php';

if($_SESSION['perfil']!="ADMINISTRADOR"){
    die("Acesso negado.");
}

$id=$_GET['id'];

apiRequest("/servicos/$id","DELETE");

header("Location:listar.php");
exit;