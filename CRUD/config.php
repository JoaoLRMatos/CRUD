<?php
    define('HOST', '127.0.0.1');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastro');

try {
    $conn = new mysqli(HOST, USER, PASS, BASE);

    if ($conn->connect_errno) {
        throw new Exception("Falha ao conectar: (" . $conn->connect_errno . ") " . $conn->connect_error);
    }
} catch (Exception $e) {
    echo "Erro de conexão: " . $e->getMessage();
    exit();
}
?>
