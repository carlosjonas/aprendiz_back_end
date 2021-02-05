<?php 

	// Linkando a minha conexão com o banco
	require_once 'conexao.php';

	// Verificando se existe meu botão para deletar meu registro
	if (isset($_POST['btn-deletar'])) {

		$id = mysqli_escape_string($conexao,$_POST['id']);

		// Linha sql que deleta os registros
		$sql = "DELETE FROM usuarios WHERE id = '$id'";

		// Verificando se minha conexão está boa e exibindo
		if(mysqli_query($conexao,$sql)) {
			echo "<script>alert('Deletado com Sucesso!');</script>";
			header('Location: ../home.php');
		}else{
			echo "<script>alert('Erro ao deletar!');</script>";
			header('Location: ../home.php');
		}
	}

 ?>