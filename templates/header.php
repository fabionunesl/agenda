<?php

include_once("config/url.php");
include_once("config/process.php");

// LIMPA A MENSAGEM
if (isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contatos</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg" style="background: linear-gradient(45deg, #C71585, #DA70D6); box-shadow: 0 4px 12px rgba(199,21,133,0.4); border-radius: 0 0 15px 15px;">
            <a class="navbar-brand" href="<?= $BASE_URL ?>/index.php" style="display: flex; align-items: center;">
                <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Agenda" style="width: 60px; border-radius: 10px; box-shadow: 0 4px 8px rgba(255, 182, 193, 0.5); margin-right: 10px;">
                <span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #fff; font-weight: 700; font-size: 1.8rem; text-shadow: 1px 1px 3px #f4c2c2;">Agenda</span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                style="border-color: #fff;">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: flex-end;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= $BASE_URL ?>/index.php"
                            style="color: #fff; font-weight: 600; font-family: 'Poppins', sans-serif; padding: 10px 20px; border-radius: 25px; transition: background 0.3s;">
                            Agenda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= $BASE_URL ?>/create.php"
                            style="color: #fff; font-weight: 600; font-family: 'Poppins', sans-serif; padding: 10px 20px; border-radius: 25px; transition: background 0.3s;">
                            Adicionar Contato
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>