<?php

    //iniciando login
    session_start();
    if (empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))){
        print "<script>location.href='index.php';</script>";
    }

    include('config.php');

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM users 
            WHERE usuario = '{$usuario}'
            AND senha = '{$senha}'";

    $res = $conn->query($sql) or die($conn->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    //caso o acesso bata com o banco de dados sera direcionado para home.php
    //caso não bata com o banco de dados sera imprimira Usuario e/ou senha incorreto(s)
    if($qtd > 0){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["senha"] = $senha;
        print "<script>location.href='home.php';</script>";
    }else{
        print "<script>alert('Usuario e/ou senha incorreto(s)');</script>";
        print "<script>location.href='index.php';</script>";
    }
?>