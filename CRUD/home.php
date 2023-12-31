<?php
session_start();
if(empty($_SESSION)){
print"<script>location.href='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

  </head>
  <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=cadastro">Cadastro de Produtos</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="?page=listar">
                Listar Produtos
                </a>
                <ul class="dropdown-menu">
                </ul>
                </li>
            </div>
        </div>
        </nav>


        <div class="container">
            <div class="row">
                <div class="col mt-5">
                <?php
                    include("config.php");
                    switch(@$_REQUEST["page"]){
                        case "cadastro":
                            include("cadastrar.php");
                        break;
                        case "listar":
                            include("listar.php");
                        break;
                        case "salvar":
                            include("salvar-produtos.php");
                        break;
                        case "editar":
                            include("editar.php");
                        break;
                        case "logado":
                            include("logado.php");
                        break;
                        case "login":
                            include("login.php");
                        default:
                            print "Bem vindo!";

                    }

                ?>
                </div>
            </div>
        </div>
            <script src="js/bootstrap.bundle.min.js"></script>
        <div>
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                <?php
                        print "<a href='logout.php' class='btn btn-danger'>Sair</a>";
                ?>
                </div>
            </nav>
        
        </div>
        </div>
  </body>
</html>