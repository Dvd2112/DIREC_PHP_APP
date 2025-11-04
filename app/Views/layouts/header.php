<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/DIREC_PHP_APP/bootstrap.php';
?>

<!DOCTYPE html>

<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DIREC - UTFPR</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Estilos customizados -->
  <link rel="stylesheet" href="<?= BASE_URL ?>public/css/style.css">

</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <!-- LOGO -->
      <a class="navbar-brand" href="<?= BASE_URL ?>index.php">DIREC UTFPR</a>

      <!-- BOTÃO TOGGLE MOBILE -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- LINKS -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          
          <!-- DROPDOWN PROJETOS -->
          <li class="nav-item dropdown">
            <a class="nav-link" href="<?= BASE_URL ?>app/Views/projetos/index.php">Projetos</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= BASE_URL ?>app/Views/projetos/tipos.php?tipo=extensao">Extensão</a></li>
              <li><a class="dropdown-item" href="<?= BASE_URL ?>app/Views/projetos/tipos.php?tipo=inovacao">Inovação</a></li>
              <li><a class="dropdown-item" href="<?= BASE_URL ?>app/Views/projetos/tipos.php?tipo=pesquisa">Pesquisa</a></li>
            </ul>
          </li>

          <!-- NOTÍCIAS -->
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>app/Views/noticias/index.php">Notícias</a>
          </li>

          <!-- EVENTOS -->
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>app/Views/eventos/index.php">Eventos</a>
          </li>

          <!-- EDITAIS -->
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>app/Views/editais/index.php">Editais</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

  <main>
