<?php

session_start();

if (!isset($_SESSION['usuario'])) {

    header('Location: /PSAF/frontend-php/login.php');
    exit;
}