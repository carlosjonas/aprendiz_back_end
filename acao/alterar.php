<?php 

	// Linkando a minha conexão com o banco
	require_once 'conexao.php';

	if (isset($_POST['btn-editar'])) {
		$nome = mysqli_escape_string($conexao,$_POST['nome']);
		$rg = mysqli_escape_string($conexao,$_POST['rg']);
		$cpf = mysqli_escape_string($conexao,$_POST['cpf']);
		$email = mysqli_escape_string($conexao,$_POST['email']);
		$endereco = mysqli_escape_string($conexao,$_POST['endereco']);
		$telefone1 = mysqli_escape_string($conexao,$_POST['telefone1']);
		$telefone2 = mysqli_escape_string($conexao,$_POST['telefone2']);

		$id = mysqli_escape_string($conexao,$_POST['id']);

		$sql = "UPDATE usuarios SET nome = '$nome',rg = '$rg',cpf = '$cpf',email = '$email',endereco = '$endereco',telefone1 = '$telefone1',telefone2 = '$telefone2' WHERE id = '$id'";

		if(mysqli_query($conexao,$sql)) {
			echo "<script>alert('Alterado com Sucesso!');</script>";
			header('Location: ../home.php');
		}else{
			echo "<script>alert('Erro ao Atualizar!');</script>";
			header('Location: ../home.php');
		}
	}

 ?>