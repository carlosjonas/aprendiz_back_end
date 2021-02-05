<?php 

	// Linkando a minha conexão com o banco
	require_once 'conexao.php';

	// Verificando se há o botão no post para filtrar meus dados 
	if (isset($_POST['btn-editar'])) {
		$nome = mysqli_escape_string($conexao,$_POST['nome']);
		$rg = mysqli_escape_string($conexao,$_POST['rg']);
		$cpf = mysqli_escape_string($conexao,$_POST['cpf']);
		$email = mysqli_escape_string($conexao,$_POST['email']);
		$endereco = mysqli_escape_string($conexao,$_POST['endereco']);
		$telefone1 = mysqli_escape_string($conexao,$_POST['telefone1']);
		$telefone2 = mysqli_escape_string($conexao,$_POST['telefone2']);

		$id = mysqli_escape_string($conexao,$_POST['id']);

		// Linha de sql que altera os dados do meu banco
		$sql = "UPDATE usuarios SET nome = '$nome',rg = '$rg',cpf = '$cpf',email = '$email',endereco = '$endereco',telefone1 = '$telefone1',telefone2 = '$telefone2' WHERE id = '$id'";

		// Verificando se minha conexão teve sucesso e exibindo as mensagens caso dê certo ou erro
		if(mysqli_query($conexao,$sql)) {
			echo "<script>return confirm('Cadastro alterado')</script>";
			header('Location: ../home.php');
		}else{
			echo "<script>return confirm('Erro ao atualizar');</script>";
			header('Location: ../home.php');
		}
	}

 ?>