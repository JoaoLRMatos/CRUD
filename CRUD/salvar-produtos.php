<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastro':

            $nome = $_POST["nome"];
            $quantidade = $_POST["quantidade"];
            $descricao = $_POST["descricao"];
            $modelo = $_POST["modelo"];

            $sql = "INSERT INTO `produtos` (`id`, `nome`, `quantidade`, `descricao`, `modelo`) VALUES ('$nome', '$quantidade', '$descricao', '$modelo')";

            $res = $conn->query($sql);
            if ($res === true) {
                echo "<script>alert('Seu produto foi cadastrado com sucesso!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível cadastrar');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'editar':
            $nome = $_POST["nome"];
            $quantidade = $_POST["quantidade"];
            $descricao = $_POST["descricao"];
            $modelo = $_POST["modelo"];

            $sql = "UPDATE produtos SET 
                        nome = '{$nome}',
                        quantidade = '{$quantidade}',
                        descricao = '{$descricao}',
                        modelo = '{$modelo}'
                    WHERE 
                        id = " . $_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res === true) {
                echo "<script>alert('Seu produto foi atualizado com sucesso!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível atualizar o produto');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM produtos WHERE id = " . $_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res === true) {
                echo "<script>alert('Excluído com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível excluir o produto');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;
    }
?>