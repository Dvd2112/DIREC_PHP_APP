<?php
require_once __DIR__ . '/../../../config/config.php';
session_start();

$erro = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    if ($email && $senha) {
        // Busca usuário
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($senha, $user['senha'])) {
            // Login ok
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nome'] = $user['nome'];
            header("Location: dashboard.php"); // ou sua página de dashboard
            exit;
        } else {
            $erro = "Email ou senha incorretos.";
        }
    } else {
        $erro = "Preencha todos os campos.";
    }
}

include LAYOUT_PATH . 'header.php';
?>

<main class="container mt-5">
    <h2>Login</h2>
    <?php if ($erro) echo "<div class='alert alert-danger'>$erro</div>"; ?>
    <form method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
        <a href="cadastro_solicitacao.php" class="btn btn-link">Solicitar cadastro</a>
    </form>
</main>

<?php include LAYOUT_PATH . 'footer.php'; ?>
