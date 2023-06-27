<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastro':

            $nome = $_POST["nome"];
            $quantidade = $_POST["quantidade"];
            $descricao = $_POST["descricao"];
            $modelo = $_POST["modelo"];

            $sql = "INSERT INTO produtos (nome, quantidade, descricao, modelo) VALUES ('{$nome}', '{$quantidade}', '{$descricao}', '{$modelo}')";

            $res = $conn->mysqli_query($sql);
            if($res==true){
                print "<script>alert('Seu produto foi cadastrado com sucesso!');</script>";
                print "<script>location.href=?page=listar;</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar;</script>";
                print "<script>location.href=?page=listar;</script>";
            }
            break;
        case 'editar':
            # code...
            break;
        case 'excluir':
            # code...
            break;
    }