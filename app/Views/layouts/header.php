<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIREC UTFPR</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <script src="/public/js/main.js" defer></script>
</head>
<body>
<header>
    <div class="container header-container">
        <!-- Logo -->
        <a href="/index.php" class="logo">
            <img src="/public/images/logo.png" alt="DIREC UTFPR" style="height:50px;">
        </a>

        <!-- Navbar -->
        <nav>
            <ul class="nav-menu">
                <li class="dropdown">
                    <a href="#">Projetos ▼</a>
                    <ul class="dropdown-content">
                        <li><a href="/app/Views/projetos/tipos.php?tipo=extensao">Extensão</a></li>
                        <li><a href="/app/Views/projetos/tipos.php?tipo=inovacao">Inovação</a></li>
                        <li><a href="/app/Views/projetos/tipos.php?tipo=pesquisa">Pesquisa</a></li>
                    </ul>
                </li>
                <li><a href="/app/Views/noticias/index.php">Notícias</a></li>
                <li><a href="/app/Views/eventos/index.php">Eventos</a></li>
                <li><a href="/app/Views/editais/index.php">Editais</a></li>
            </ul>

            <!-- Botão mobile -->
            <button class="menu-toggle" onclick="toggleMenu('nav-mobile')">☰</button>
        </nav>
    </div>

    <!-- Menu mobile -->
    <div id="nav-mobile" class="mobile-menu" style="display:none;">
        <ul>
            <li><a href="#">Projetos ▼</a>
                <ul>
                    <li><a href="/app/Views/projetos/tipos.php?tipo=extensao">Extensão</a></li>
                    <li><a href="/app/Views/projetos/tipos.php?tipo=inovacao">Inovação</a></li>
                    <li><a href="/app/Views/projetos/tipos.php?tipo=pesquisa">Pesquisa</a></li>
                </ul>
            </li>
            <li><a href="/app/Views/noticias/index.php">Notícias</a></li>
            <li><a href="/app/Views/eventos/index.php">Eventos</a></li>
            <li><a href="/app/Views/editais/index.php">Editais</a></li>
        </ul>
    </div>
</header>

<style>
/* Navbar desktop */
.nav-menu {
    list-style: none;
    display: flex;
    gap: 1rem;
    align-items: center;
}

.nav-menu li {
    position: relative;
}

.nav-menu li a {
    padding: 0.5rem 1rem;
    display: block;
    color: #000;
}

.nav-menu li a:hover {
    background-color: #FAB307;
    color: #fff;
    border-radius: 4px;
}

/* Dropdown */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #F5F5F5;
    min-width: 150px;
    z-index: 100;
    border-radius: 4px;
}

.dropdown-content li a {
    padding: 0.5rem 1rem;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Mobile */
.menu-toggle {
    display: none;
    background-color: #FAC107;
    border: none;
    padding: 0.5rem 1rem;
    cursor: pointer;
    border-radius: 4px;
}

.mobile-menu ul {
    list-style: none;
    padding: 0;
}

.mobile-menu ul li a {
    display: block;
    padding: 0.5rem 1rem;
    border-bottom: 1px solid #FAD67A;
}

/* Responsividade */
@media (max-width: 767px) {
    .nav-menu { display: none; }
    .menu-toggle { display: block; }
}
</style>
