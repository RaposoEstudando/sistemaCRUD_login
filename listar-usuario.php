<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema CRUD</title>
</head>
<body>
    <h1>Lista de usuários</h1>
    <?php
    $sql =  "SELECT * FROM cadusuario";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
    if ($qtd>0){
        print"<table class ='table table-hover table-striped'>";
        print"<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Email</th>";
            print "<th>Senha</th>";
            print "<th>Telefone</th>";
            print "<th>Ação</th>";
            print "</tr>";




        print"</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id. "</td>";
            print "<td>".$row->nome. "</td>";
            print "<td>".$row->email. "</td>";
            print "<td>".$row->senha. "</td>";
            print "<td>".$row->tel. "</td>";
            print "<td>
            <button onclick=\"location.href='?page=editar&id=".$row->id."'; \" class = 'btn btn-success'>Editar</button>
            <button onclick= \"if(confirm('Tem certeza que deseja excluir?')) {location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class = 'btn btn-danger'>Excluir</button>

            </td>";

            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class = 'alert alert-danger'> Não encontrou resultado!</p>";
    }
    ?>
    
</body>
</html>