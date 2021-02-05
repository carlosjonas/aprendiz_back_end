<?php 
	//conexao com o banco
	require_once 'acao/conexao.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
	<meta id="viewport" name="viewport" content="width=device-width" />
	<script src="https://kit.fontawesome.com/7b2c34bc68.js" crossorigin="anonymous"></script>
</head>
<body>
	<h1>CRUD - Aprendiz de Back End</h1>

	<table>
		<thead>
			<tr>
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
						<button class="icone-editar">
							<a href="editar.php?id=<?php echo $dados['id'];?>"><i class="fas fa-pencil-alt"></i></a>
						</button>
					</td>
					<td>
						<form action="acao/deletar.php" method="POST">
							<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
							<button class="icone-deletar" type="submit" name="btn-deletar">
								<i class="fas fa-trash-alt"></i>
							</button>
						</form>
					</td>
				</tr>

			<?php 
				}
			?>
		</tbody>
	</table>

	<br/><br/>

	<div  class="btn-adicionar">
		<a href="adicionar.php">Adicionar Cliente</a>
	</div>
	
</body>
</html>