<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<meta charset="utf-8"/>
	<link rel="shortcut icon" href="assets/img/favicon.ico" />
	<!--Adicionando minha linkagem externa de css,js e de icones do font-awesome-->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
	<meta id="viewport" name="viewport" content="width=device-width" />
	<script type="text/javascript" src="assets/js/mascaras.js">
	</script>
	<script src="https://kit.fontawesome.com/7b2c34bc68.js" crossorigin="anonymous"></script>
</head>
<body>
	<h1>Adicionar Clientes</h1>

	<!--Mostarando pro meu usuário que possuem campos obrigatórios-->
	<p>Os campos com <em>*</em> são obrigatórios !</p>

	<br/>

	<!--Criando meu formulário de cadastro, colocando o label e logo após seu determinado input-->
	<!--Em alguns campos do meu formulário colquei mascaras com o js-->
	<form method="POST" action="acao/criar.php">
		<fieldset>

			<label>
				* NOME:
			</label><br/>
			<input type="text" name="nome" id="nome" maxlength="255" placeholder="NOME" required><br/><br/>

			<label>
				* RG:
			</label><br/>
			<input type="text" name="rg" id="rg" maxlength="12" placeholder="9999999999-9" onkeyup="mascara_rg()" required><br/><br/>

			<label>
				* CPF:
			</label><br/>
			<input type="text" name="cpf" id="cpf" maxlength="14" onkeyup="mascara_cpf()" placeholder="999.999.999-99" required><br/><br/>

			<label>
				* EMAIL:
			</label><br/>
			<input type="text" name="email" id="email" maxlength="255" placeholder="fulano@email.com" required><br/><br/>

			<label>
				* ENDEREÇO:
			</label><br/>
			<input type="text" name="endereco" id="endereco" maxlength="255" placeholder="Rua Alves, 05" required><br/><br/>

			<label>
				* TELEFONE 1:
			</label><br/>
			<input type="text" name="telefone1"  id="telefone1" onkeyup="mascara_telefone1()" maxlength="14" placeholder="(99)99999-9999" required><br/><br/>

			<label>
				  TELEFONE 2:
			</label><br/>
			<input type="text" name="telefone2" id="telefone2" onkeyup="mascara_telefone2()" maxlength="14" placeholder="(99)99999-9999"><br/><br/>

			<!--Botão de adicionar novo usuário que manda as informações pro criar.php-->
			<button type="submit" class="btn-adicionar" name="btn-enviar">
				Adicionar Novo Usuário
			</button>
			<!--Botão de cancelar o cadastro onde volta pra página home -->
			<button class="btn-cancelar">
				<a href="home.php">Cancelar Cadastro</a>
			</button>
		</fieldset>
	</form>
</body>
</html>