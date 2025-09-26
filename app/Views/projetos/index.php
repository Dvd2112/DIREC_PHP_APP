<?php include '../app/Views/layouts/header.php'; ?>

<main class="container py-5">
  <h1 class="text-center mb-4">Projetos</h1>
  <p class="text-center">Explore os projetos da UTFPR organizados por tipo.</p>

  <div class="row mt-5">
    <div class="col-md-4">
      <div class="card shadow fade-element">
        <div class="card-body text-center">
          <h3 class="card-title">Extensão</h3>
          <p class="card-text">Projetos que conectam universidade e comunidade.</p>
          <a href="tipos.php?tipo=extensao" class="btn btn-warning">Ver mais</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow fade-element">
        <div class="card-body text-center">
          <h3 class="card-title">Inovação</h3>
          <p class="card-text">Projetos de tecnologia e empreendedorismo.</p>
          <a href="tipos.php?tipo=inovacao" class="btn btn-warning">Ver mais</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow fade-element">
        <div class="card-body text-center">
          <h3 class="card-title">Pesquisa</h3>
          <p class="card-text">Projetos científicos e de iniciação acadêmica.</p>
          <a href="tipos.php?tipo=pesquisa" class="btn btn-warning">Ver mais</a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include '../app/Views/layouts/footer.php'; ?>
