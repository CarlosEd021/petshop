<?php

session_start();

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Administrador
    if ($usuario === 'admin' && $senha === '123456') {

        $_SESSION['usuario'] = $usuario;
        $_SESSION['perfil'] = 'ADMINISTRADOR';

        header('Location: dashboard.php');
        exit;
    }

    // Funcionário
    if ($usuario === 'funcionario' && $senha === '123456') {

        $_SESSION['usuario'] = $usuario;
        $_SESSION['perfil'] = 'FUNCIONARIO';

        header('Location: dashboard.php');
        exit;
    }

    $erro = 'Usuário ou senha inválidos.';
}
?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - PSAF</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-md-4">

            <div class="card">

                <div class="card-body">

                    <h3 class="text-center mb-4">
                        PSAF
                    </h3>

                    <?php if ($erro): ?>

                        <div class="alert alert-danger">

                            <?= $erro ?>

                        </div>

                    <?php endif; ?>

                    <form method="post">

                        <div class="mb-3">

                            <label class="form-label">
                                Usuário
                            </label>

                            <input
                                type="text"
                                name="usuario"
                                class="form-control"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Senha
                            </label>

                            <input
                                type="password"
                                name="senha"
                                class="form-control"
                                required>

                        </div>

                        <button class="btn btn-primary w-100">

                            Entrar

                        </button>

                    </form>

                    <hr>

                    <small class="text-muted">
                        Admin: admin / 123456<br>
                        Funcionário: funcionario / 123456
                    </small>

                </div>

            </div>

        </div>

    </div>

</div>

</body>

</html>