<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DIREC - UTFPR</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Estilos customizados -->
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a class="navbar-brand fw-bold text-warning" href="index.php">DIREC UTFPR</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarProjetos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Projetos
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="projetos.php?tipo=extensao">Extensão</a></li>
                <li><a class="dropdown-item" href="projetos.php?tipo=inovacao">Inovação</a></li>
                <li><a class="dropdown-item" href="projetos.php?tipo=pesquisa">Pesquisa</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="noticias.php">Notícias</a></li>
            <li class="nav-item"><a class="nav-link" href="eventos.php">Eventos</a></li>
            <li class="nav-item"><a class="nav-link" href="editais.php">Editais</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
