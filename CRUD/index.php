<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card">
                <form action="login.php" method="POST">
                    <div>
                        <div class="mb-3">
                            <label>Usuário</label>
                            <input type="text" name="usuario" calss="form-control">
                        </div>
                    </div>
                    <div></div>
                        <div class="mb-3">
                            <label>Senha</label>
                            <input type="password" name="senha" calss="form-control">
                        </div>
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
    </div>
</body>
</html>