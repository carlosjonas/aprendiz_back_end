<?php 
// Criando as variáveis para a conexão com o banco de dados

$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

// Criando a conexão com o banco 
$conexao = mysqli_connect($servername, $username, $password, $database);

//Verificando se não há erros na minha conexão
if (!$conexao) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";


 ?>