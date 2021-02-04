<?php	
//verificação do botão
if (isset($_POST['btn-cadastrar'])) {
	echo "Clicou !";
}

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
	<h1>Adicionar CLientes</h1>

	<p>Os campos com * são obrigatórios !</p>

		<br/>

	<form method="POST" action="acao/criar.php">
		<fieldset>

			<label>
				* NOME:
			</label><br/>
			<input type="text" name="nome" id="nome" required><br/><br/>

			<label>
				* RG:
			</label><br/>
			<input type="text" name="rg" id="rg" required><br/><br/>
			<label>
				* CPF:
			</label><br/>
			<input type="text" name="cpf" id="cpf" required><br/><br/>
			<label>
				* EMAIL:
			</label><br/>
			<input type="text" name="email" id="email" required><br/><br/>
			<label>
				* ENDEREÇO:
			</label><br/>
			<input type="text" name="endereco" id="endereco" required><br/><br/>
			<label>
				* TELEFONE 1:
			</label><br/>
			<input type="text" name="telefone1" id="telefone1" required><br/><br/>
			<label>
				  TELEFONE 2:
			</label><br/>
			<input type="text" name="telefone2" id="telefone2" required><br/><br/>

			<button type="submit" name="btn-enviar"> Adicionar novo cliente</button>
			<a href="home.php">Cancelar cadastro</a>

		</fieldset>
	</form>
</body>
</html>