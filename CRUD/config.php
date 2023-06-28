<?php

//fazendo conexão com o banco de dados

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastro');

try {
    $conn = new mysqli(HOST, USER, PASS, BASE);


//testando para ver se está tudo certo com a conexão
    if ($conn->connect_errno) {
        throw new Exception("Falha ao conectar: (" . $conn->connect_errno . ") " . $conn->connect_error);
    }
} catch (Exception $e) {
    echo "Erro de conexão: " . $e->getMessage();
    exit();
}
?>
