<?php 
	//Linkando com a minha conexão
	require_once 'conexao.php';

	// verificando se existe o meu um botão no meu adicionar.php para filtrar definir as variáveis de dados
	if (isset($_POST['btn-enviar'])) {
		$nome = mysqli_escape_string($conexao, $_POST['nome']);
		$rg = mysqli_escape_string($conexao, $_POST['rg']);
		$cpf = mysqli_escape_string($conexao, $_POST['cpf']);
		$email = mysqli_escape_string($conexao, $_POST['email']);
		$endereco = mysqli_escape_string($conexao, $_POST['endereco']);
		$telefone1 = mysqli_escape_string($conexao, $_POST['telefone1']);
		$telefone2 = mysqli_escape_string($conexao, $_POST['telefone2']);
	}

	// criando a linha de sql para inserir dados no meu banco
	$sql = "INSERT INTO usuarios (nome, rg, cpf, email, endereco, telefone1, telefone2) VALUES('$nome', '$rg', '$cpf', '$email', '$endereco', '$telefone1', '$telefone2' )";

	//verificando se os dados foram adicionados com sucesso ao banco
	if(mysqli_query($conexao,$sql)) {
		echo "<script>alert('Cadastrado com Sucesso!');</script>";
		echo "<script>window.location='../home.php';</script>";
		//header('Location: ../home.php');
	}else{
		echo "<script>alert('Erro ao cadastrar!');</script>";
		echo "<script>window.location='../home.php';</script>";
		//header('Location: ../home.php');
}

 ?>