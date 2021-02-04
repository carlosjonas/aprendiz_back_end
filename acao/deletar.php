<?php 

// Linkando a minha conexão com o banco
require_once 'conexao.php';

if (isset($_POST['btn-deletar'])) {

	$id = mysqli_escape_string($conexao,$_POST['id']);

	$sql = "DELETE FROM usuarios WHERE id = '$id'";

	if(mysqli_query($conexao,$sql)) {
		echo "Deletado com Sucesso";
		header('Location: ../home.php');
	}else{
		echo "Erro ao deletar";
		header('Location: ../home.php');
}
}

 ?>