<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastro');

    $conn = new mysqli(HOST,USER,PASS,BASE);
if ($conn->connect_errno) {
    echo "Falha ao conectar: (" . $conn->connect_errno . ")" . $conn->connect_error;
}
?>