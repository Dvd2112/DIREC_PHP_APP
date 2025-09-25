<?php include 'app/Views/layouts/header.php'; ?>

<main class="container mt-5">
  <div class="text-center mb-5">
    <h1 class="fw-bold">Bem-vindo ao DIREC</h1>
    <p class="lead">Central de projetos, notícias, eventos e editais da UTFPR.</p>
  </div>

  <section class="row g-4">
    <div class="col-md-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h2 class="card-title">Projetos de Extensão</h2>
          <p class="card-text">Veja os projetos de extensão.</p>
          <a href="projetos.php?tipo=extensao" class="btn btn-warning">Acessar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h2 class="card-title">Projetos de Inovação</h2>
          <p class="card-text">Veja os projetos de inovação.</p>
          <a href="projetos.php?tipo=inovacao" class="btn btn-warning">Acessar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h2 class="card-title">Projetos de Pesquisa</h2>
          <p class="card-text">Veja os projetos de pesquisa.</p>
          <a href="projetos.php?tipo=pesquisa" class="btn btn-warning">Acessar</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'app/Views/layouts/footer.php'; ?>
