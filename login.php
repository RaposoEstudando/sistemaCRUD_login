<?php
session_start();
if(empty($_POST)or empty($_POST["usuario"])or empty($_POST ["usuario"])){
  print"<script>location.href='index.php',</script>"; 
}
include('config.php');

$usuario=$_POST["usuario"];
$senha = $_POST["senha"];


$sql = "SELECT * FROM cadusuario
        WHERE email='{$usuario}'
        AND  senha='{$senha}'";

$res=$conn->query($sql) or die ($conn->error);

$qtd=$res->num_rows;

if ($qtd> 0 ){
    $_SESSION["nome"]= $nome;
    print"<script>location.href='dashboard.php';</script>"; 
}else{
    print"<script>alert ('usuário e/ou senha  incorreto (s)!!!')</script>"; 
    print"<script>location.href='index.php';</script>"; 
    }





?>