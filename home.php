<?php 
	//Linkando minha conexao com o banco
	require_once 'acao/conexao.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<meta charset="utf-8"/>
	<link rel="shortcut icon" href="assets/img/favicon.ico" />
	<!--Adicionando minha linkagem externa de css,js e de icones do font-awesome-->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
	<meta id="viewport" name="viewport" content="width=device-width" />
	<script src="https://kit.fontawesome.com/7b2c34bc68.js" crossorigin="anonymous"></script>
</head>
<body>
	<!--Iniciando meu crud básico-->
	<h1>CRUD - Aprendiz de Back End</h1>

	<table>
		<thead>
			<tr>
				<!--Colocando os campos de cabeçalho-->
				<th>Nome:</th>
				<th>RG:</th>
				<th>CPF:</th>
				<th>Email:</th>
				<th>Endereço:</th>
				<th>Telefone 1:</th>
				<th>Telefone 2:</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
				//Aqui eu estou selecionando as linhas do meu banco pra exibir em tempo real as informações e estou passando os dados em um loop 
				$sql= "SELECT * FROM usuarios";
				$result = mysqli_query($conexao, $sql);
				while ($dados = mysqli_fetch_array($result)) {
				
			 ?>
				<tr>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['rg']; ?></td>
					<td><?php echo $dados['cpf']; ?></td>
					<td><?php echo $dados['email']; ?></td>
					<td><?php echo $dados['endereco']; ?></td>
					<td><?php echo $dados['telefone1']; ?></td>
					<td><?php echo $dados['telefone2']; ?></td>
					<td>
						<!--Meu botão de Editar-->
						<button class="icone-editar">
							<a href="editar.php?id=<?php echo $dados['id'];?>"><i class="fas fa-pencil-alt"></i></a>
						</button>
					</td>
					<td>
						<form action="acao/deletar.php" method="POST">
							<!--input escondido para apontar pro meu deletar e saber qual registro estou pegando-->
							<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
							<!--Meu botão de Deletar, só confirmo com um return pra não acontecer de clicarem sem querer-->
							<button class="icone-deletar" type="submit" onclick="return confirm('Tem certeza que deseja editar este registro?')" name="btn-deletar">
								<i class="fas fa-trash-alt"></i>
							</button>
						</form>
					</td>
				</tr>

			<?php
				//Fim do loop que faço pra exibir os dados
				}
			?>
		</tbody>
	</table>

	<br/><br/>

	<!--Meu botão para adicionar um novo usuário-->
	<div  class="btn-adicionar">
		<a href="adicionar.php">Adicionar Usuário</a>
	</div>

</body>
</html>