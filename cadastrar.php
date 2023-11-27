<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema CRUD</title>
</head>
<body>
    <h1>Cadastre-se</h1>
    <form action="?page=salvar" method="post">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>

        <div class="mb-3">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control">
         </div>

         <div class="mb-3">
            <label for="tel">Telefone</label>
            <input type="tel" name="tel" id="tel" class="form-control">
         </div>

         <div class="mb-3">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control">
         </div>

         <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
         </div>
    </form>
</body>
</html>