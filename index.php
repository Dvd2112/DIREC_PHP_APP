<?php 
// Inclui o layout
include_once __DIR__ . '/app/Views/layouts/header.php'; 
?>

<main>
    <div class="container">
        <!-- Hero Section -->
        <section class="hero">
            <h1>Bem-vindo ao DIREC UTFPR</h1>
            <p>Diretoria de Relações Empresariais e Comunitárias</p>
        </section>

        <!-- Seções principais -->
        <section class="cards-home">
            <div class="card">
                <h2>Projetos</h2>
                <p>Acompanhe os projetos de Extensão, Inovação e Pesquisa desenvolvidos na UTFPR.</p>
                <a href="/app/Views/projetos/index.php" class="btn">Ver Projetos</a>
            </div>

            <div class="card">
                <h2>Notícias</h2>
                <p>Fique por dentro das novidades e conquistas relacionadas à universidade.</p>
                <a href="/app/Views/noticias/index.php" class="btn">Ver Notícias</a>
            </div>

            <div class="card">
                <h2>Eventos</h2>
                <p>Participe dos principais eventos acadêmicos e comunitários da UTFPR.</p>
                <a href="/app/Views/eventos/index.php" class="btn">Ver Eventos</a>
            </div>

            <div class="card">
                <h2>Editais</h2>
                <p>Confira os editais abertos e oportunidades de participação.</p>
                <a href="/app/Views/editais/index.php" class="btn">Ver Editais</a>
            </div>
        </section>
    </div>
</main>

<?php 
// Inclui o footer
include_once __DIR__ . '/app/Views/layouts/footer.php'; 
?>

<style>
/* Hero */
.hero {
    text-align: center;
    padding: 3rem 1rem;
    background: linear-gradient(135deg, #FAC107, #FAB307);
    color: #000;
    border-radius: 8px;
    margin-bottom: 2rem;
}

/* Cards */
.cards-home {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
}

.cards-home .card {
    text-align: center;
}

.cards-home .card h2 {
    margin-bottom: 0.5rem;
}
</style>
