<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SistemaCRUD_login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
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
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=entrar">Entrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=cadastrar">Cadastrar</a>
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
                    case "cadastrar":
                        include("cadastrar.php");
                         break;
                         case "entrar":
                          include("entrar.php");
                           break;
                    case "listar":
                        include("listar-usuario.php");
                         break;
                    case "salvar":
                         include("salvar-usuario.php");
                          break;
                    case "editar":
                         include("editar-usuario.php");
                          break;
                    default:
                            echo "
                            <h1> Bem vindo ao Sistema CRUD 2.0!</h1>
                            <p>
                            O portal CRUD foi criado como um projeto interdisciplinar para ensinar aos
                            <br>
                            alunos a utilizar uma interface web para manipular banco de dados.
                            <br>
                            Foram utilizadas as linguagens PHP, HTML, CSS, JS e SQL no
                            <br>
                            desenvolvimento do projeto.
                            <br><br>
                            <b>C</b>reate
                            <br>
                            <b>R</b>ead
                            <br>
                            <b>U</b>pdate
                            <br>
                            <b>D</b>elete
                            </p>";
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
