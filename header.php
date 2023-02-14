<!DOCTYPE html>
<html lang="pt-br">
<?php
function ativa($pagina)
{
    if (basename($_SERVER["PHP_SELF"]) == $pagina) {
        return " active text white";
    } else {
        return null;
    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro VideoGames</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="javas.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">
    <div class="container-fluid">
        <div class="row">
            <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-3 shadow">
                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.php">
                    Cadastro de VideoGames
                </a>
                <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start pe-3 d-none d-sm-block">
                    <div class="text-end">
                        <button type="button" class="btn btn-light me-4">
                            <span data-feather="log-in"></span>
                            Entrar
                        </button>
                        <button type="button" class="btn btn-danger">
                            <span data-feather="log-out"></span>
                            Sair
                        </button>
                    </div>
                </div>

            </header>
            <div class="d-inline-block p-3" style="width: 300px;">
                    <div class="row">
                        <nav>
                            <div class="position-sticky">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item">
                                        <a href="index.php" class="nav-link <?= ativa('index.php'); ?>" aria-current="page">
                                            <i class="bi bi-house-fill"></i>
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form.php" class="nav-link  <?= ativa('form.php'); ?>">
                                            <i class="bi bi-window-sidebar"></i>
                                            Formulário
                                        </a>
                                    </li>
                                    <li>
                                        <a href="lista.php" class="nav-link  <?= ativa('lista.php'); ?>">
                                            <i class="bi bi-list-ul"></i>
                                            Listagem
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            <main class="col-md-3 ms-sm-auto col-lg-10 px-md-4 me-2">