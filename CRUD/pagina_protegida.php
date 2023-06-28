<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['user'])) {
    // Usuário não autenticado, redireciona para a página de login
    header('Location: login.php');
    exit();
}

// Se o usuário estiver autenticado, exibe o conteúdo da página protegida
echo "Bem-vindo, " . $_SESSION['user']['email'] . "!";
?>
