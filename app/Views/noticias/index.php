<?php include '../app/Views/layouts/header.php'; ?>

<main class="container py-5">
  <h1 class="text-center mb-4">Notícias</h1>
  <p class="text-center">Acompanhe as últimas atualizações e conquistas.</p>

  <div class="row mt-5">
    <div class="col-md-6">
      <div class="card mb-4 shadow fade-element">
        <img src="../public/images/news1.jpg" class="card-img-top" alt="Notícia">
        <div class="card-body">
          <h5 class="card-title">Título da Notícia</h5>
          <p class="card-text">Resumo da notícia com algumas linhas para chamar atenção do leitor.</p>
          <a href="show.php?id=1" class="btn btn-primary">Ler mais</a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card mb-4 shadow fade-element">
        <img src="../public/images/news2.jpg" class="card-img-top" alt="Notícia">
        <div class="card-body">
          <h5 class="card-title">Outra Notícia</h5>
          <p class="card-text">Resumo breve com link para a notícia completa.</p>
          <a href="show.php?id=2" class="btn btn-primary">Ler mais</a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include '../app/Views/layouts/footer.php'; ?>
