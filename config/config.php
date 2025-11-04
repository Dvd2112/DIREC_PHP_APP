<?php
// ============================================
// CONFIGURAÇÕES GLOBAIS DO SISTEMA - DIREC PHP APP
// ============================================

// Caminho absoluto da raiz do projeto
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', __DIR__ . '/../'); // 'config' está dentro de DIREC_PHP_APP/config
}

// Configurações de timezone e codificação
date_default_timezone_set('America/Sao_Paulo');
mb_internal_encoding("UTF-8");

// URL base
if (!defined('BASE_URL')) {
    define('BASE_URL', 'http://localhost/DIREC_PHP_APP/');
}

// Caminhos para views e layouts
if (!defined('VIEW_PATH')) define('VIEW_PATH', ROOT_PATH . 'app/Views/');
if (!defined('LAYOUT_PATH')) define('LAYOUT_PATH', VIEW_PATH . 'layouts/');

// Configurações do banco de dados
// Configurações do banco
define('DB_HOST', 'localhost');      // servidor MySQL
define('DB_NAME', 'direc_db');       // nome do banco
define('DB_USER', 'root');           // usuário do banco
define('DB_PASS', '');               // senha do usuário
define('DB_CHARSET', 'utf8mb4');     // charset, para suportar caracteres especiais


// ============================================
// CONEXÃO PDO
// ============================================
$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET;

try {
    $pdo = new PDO($dsn, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // ativa exibição de erros
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // retorna arrays associativos
        PDO::ATTR_EMULATE_PREPARES => false, // evita problemas de prepared statements
    ]);
    // Se chegar aqui, a conexão deu certo
} catch (PDOException $e) {
    die("Erro de conexão com o banco: " . $e->getMessage());
}

if ($pdo) {
    echo "Conexão com o banco DIREC realizada com sucesso!";
}

