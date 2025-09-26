<?php include '../app/Views/layouts/header.php'; ?>

<main class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
      <div class="card shadow fade-element">
        <div class="card-body">
          <h3 class="text-center mb-4">Login</h3>
          <form action="authenticate.php" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Senha</label>
              <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-warning w-100">Entrar</button>
          </form>
          <p class="text-center mt-3">
            Não tem conta? <a href="register.php">Cadastre-se</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include '../app/Views/layouts/footer.php'; ?>
