<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="sistema_crud";

//Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

//Testar conexão
if($conn->connect_error){
    die("Falha na conexão: erro".$conn->connect_error );
}

?>