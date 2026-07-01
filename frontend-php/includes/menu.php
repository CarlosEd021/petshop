<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <div class="container-fluid">

        <a class="navbar-brand" href="/PSAF/frontend-php/dashboard.php">
            PSAF
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/PSAF/frontend-php/dashboard.php">
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/PSAF/frontend-php/pages/clientes/listar.php">
                        Clientes
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/PSAF/frontend-php/pages/pets/listar.php">
                        Pets
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/PSAF/frontend-php/pages/produtos/listar.php">
                        Produtos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/PSAF/frontend-php/pages/servicos/listar.php">
                        Serviços
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/PSAF/frontend-php/pages/agendamentos/listar.php">
                        Agendamentos
                    </a>
                </li>

                <?php if($_SESSION['perfil']=="ADMINISTRADOR"): ?>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown">

                        Relatórios

                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item"
                               href="/PSAF/frontend-php/pages/relatorios/clientes.php">
                                Clientes
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="/PSAF/frontend-php/pages/relatorios/pets.php">
                                Pets
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="/PSAF/frontend-php/pages/relatorios/produtos.php">
                                Produtos
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="/PSAF/frontend-php/pages/relatorios/agendamentos.php">
                                Agendamentos
                            </a>
                        </li>

                    </ul>

                </li>

                <?php endif; ?>

            </ul>

            <span class="navbar-text text-white me-3">

                <?= $_SESSION['usuario'] ?>
                (<?= $_SESSION['perfil'] ?>)

            </span>

            <a href="/PSAF/frontend-php/logout.php"
               class="btn btn-danger">

                Sair

            </a>

        </div>

    </div>

</nav>