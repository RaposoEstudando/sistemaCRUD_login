<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema CRUD</title>
    <link rel="stylesheet" href="style.css
</head>
<body>
    <div class="login">
        <div class="card">
            <div class="card-body">
                <h1>Login</h1>
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="email">E-mail</label>
                        <input type="email" name="usuario" id="usuario" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control">
                     </div>
                     <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                     </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>