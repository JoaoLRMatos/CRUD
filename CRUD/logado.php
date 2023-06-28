<?php
    switch ($_REQUEST["acao"]) {
        case 'login':

    // Verifica se o formulário foi submetido
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Realize a verificação das credenciais com os dados armazenados no banco de dados

        // Exemplo de verificação básica apenas para fins de demonstração
        if ($email === 'usuario@example.com' && $password === 'senha') {
            // Autenticação bem-sucedida, cria a sessão do usuário
            $_SESSION['user'] = [
                'email' => $email
                // Outras informações do usuário, se necessário
            ];

            // Redireciona para a página protegida
            header('Location: pagina_protegida.php');
            exit();
        } else {
            // Credenciais inválidas, exibe uma mensagem de erro
            echo "Credenciais inválidas!";
        }
    }
}
?>