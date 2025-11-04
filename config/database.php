<?php
// ============================================
// Conexão com o banco de dados DIREC
// ============================================

try {
    $host = 'localhost';
    $dbname = 'direc_db';
    $user = 'root';
    $pass = ''; // senha do MySQL, se houver
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Lança exceções em caso de erro
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Retorna arrays associativos
        PDO::ATTR_EMULATE_PREPARES   => false,                  // Desativa emulação de prepared statements
    ];

    $pdo = new PDO($dsn, $user, $pass, $options);

} catch (PDOException $e) {
    // Se não conectar, exibe erro e encerra
    echo "Erro de conexão com o banco: " . $e->getMessage();
    exit;
}
