<?php

require_once '../../includes/auth.php';
require_once '../../config/api.php';

if ($_SESSION['perfil'] != 'ADMINISTRADOR') {
    die("Acesso negado.");
}

$id = $_GET['id'] ?? null;

if ($id) {
    apiRequest("/clientes/$id", "DELETE");
}

header("Location: listar.php");
exit;