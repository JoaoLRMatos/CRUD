<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <form action="login.php" method="POST">
                    <div>
                        <div class="mb-3">
                            <label>Usuário</label>
                            <input type="text" name="usuario" calss="form-control">

                        </div>
                    </div>
                        <div class="mb-3">
                            <label>Senha</label>
                            <input type="password" name="senha" calss="form-control">
                        </div>
                    <div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primery">Enviar</button>


                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>