<?php include 'app/Views/layouts/header.php'; ?>

<main class="container mt-5">
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicadores -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
  </div>

  <!-- Slides -->
  <div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active">
      <img src="assets/img/slide1.gif" class="d-block w-100" alt="Projetos de Extensão">
      <div class="carousel-caption d-none d-md-block fade-in">
        <h5>Projetos de Extensão</h5>
        <p>Conectando a universidade à comunidade.</p>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <img src="assets/img/slide2.jpeg" class="d-block w-100" alt="Projetos de Inovação">
      <div class="carousel-caption d-none d-md-block fade-in">
        <h5>Inovação e Tecnologia</h5>
        <p>Transformando ideias em soluções reais.</p>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <img src="assets/img/slide3.jpg" class="d-block w-100" alt="Projetos de Pesquisa">
      <div class="carousel-caption d-none d-md-block fade-in">
        <h5>Pesquisa Acadêmica</h5>
        <p>Produzindo conhecimento de impacto.</p>
      </div>
    </div>
  </div>

  <!-- Controles -->
  <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>
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
