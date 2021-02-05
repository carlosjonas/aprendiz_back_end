
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
	<h1>Adicionar Clientes</h1>

	<p>Os campos com <em>*</em> são obrigatórios !</p>

		<br/>

	<form method="POST" action="acao/criar.php">
		<fieldset>

			<label>
				* NOME:
			</label><br/>
			<input type="text" name="nome" id="nome" maxlength="255" required><br/><br/>

			<label>
				* RG:
			</label><br/>
			<input type="text" name="rg" id="rg" maxlength="11" required><br/><br/>
			<label>
				* CPF:
			</label><br/>
			<input type="text" name="cpf" id="cpf" maxlength="11" required><br/><br/>
			<label>
				* EMAIL:
			</label><br/>
			<input type="text" name="email" id="email" maxlength="255" required><br/><br/>
			<label>
				* ENDEREÇO:
			</label><br/>
			<input type="text" name="endereco" id="endereco" maxlength="255" required><br/><br/>
			<label>
				* TELEFONE 1:
			</label><br/>
			<input type="text" name="telefone1" id="telefone1" maxlength="9" required><br/><br/>
			<label>
				  TELEFONE 2:
			</label><br/>
			<input type="text" name="telefone2" id="telefone2" maxlength="9"><br/><br/>

			<button type="submit" class="btn-adicionar" name="btn-enviar">
				<a href=""> Adicionar Novo Cliente</a></button>
			<button class="btn-cancelar">
				<a href="home.php">Cancelar Cadastro</a>
			</button>
		</fieldset>
	</form>
</body>
</html>