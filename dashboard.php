<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SistemaCRUD_login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
      footer {
        background-color: gray;
        color: white;
        text-align: center;
        margin-top: 20px;
      }
      img{
        width: 150px;
      }
    </style>
</head>
<body>
     <header>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">
        <img src="etec.png" alt="Logo da Etec">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?page=linguagens">Linguagens Utilizadas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=listar">Lista de usuarios</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-danger" href="?page=sair">sair</a>
            </li>
        </ul>
      </div>
    </nav>
     </header>

<main>
    <div class="container">
        <div class="card border-light mb-3 d-flex ">
            <div class="cl mt-5">
                <?php
                include("config.php");
                switch(@$_REQUEST["page"]){
                    case "linguagens":
                        include("linguagens.php");
                         break;
                         case "listar":
                          include("listar-usuario.php");
                           break;
                    case "sair":
                        include("logout.php");
                         break;
                    case "salvar":
                         include("salvar-usuario.php");
                          break;
                    case "editar":
                         include("editar-usuario.php");
                          break;
                    default:
                            echo "
                            <h1> Bem vindo a area restrita do Sistema CRUD 2.0!</h1>
                            
                            ";
                }
                ?>
            </div>
         </div>
    </div>
</main>

     <footer>
        &copy; Luiz Carlos
     </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
