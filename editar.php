<?php
	//Linkando com a conexão
	require_once 'acao/conexao.php';

	//Verificando qual o id que vou pegar no meu editar
	if (isset($_GET['id'])) {
		$id = mysqli_escape_string($conexao, $_GET['id']);

		$sql = "SELECT * FROM usuarios WHERE id = '$id'";
		$result = mysqli_query($conexao, $sql);
		$dados = mysqli_fetch_array($result);
	}

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
	<script type="text/javascript" src="assets/js/mascaras.js">
	</script>
	<script src="https://kit.fontawesome.com/7b2c34bc68.js" crossorigin="anonymous"></script>
</head>
<body>
	<h1>Editar CLientes</h1>

	<!--Mostarando pro meu usuário que possuem campos obrigatórios-->
	<p>Os campos com <em>*</em> são obrigatórios !</p>

	<br/>

	<!--Criando meu formulário de cadastro, colocando o label e logo após seu determinado input-->
	<!--Em alguns campos do meu formulário colquei mascaras com o js-->
	<!--Aqui no Editar já vem com os dados do banco-->
	<form method="POST" action="acao/alterar.php">
		<fieldset>
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>"/>
			<label>
				* NOME:
			</label><br/>
			<input type="text" name="nome" id="nome" placeholder="Nome" required value="<?php echo $dados['nome'];?>"><br/><br/>

			<label>
				* RG:
			</label><br/>
			<input type="text" name="rg" id="rg" maxlength="12" placeholder="9999999999-9" onkeypress="mascara_rg(this)"required value="<?php echo $dados['rg'];?>"><br/><br/>

			<label>
				* CPF:
			</label><br/>
			<input type="text" name="cpf" id="cpf" maxlength="14" onkeypress="mascara_cpf(this)" placeholder="999.999.999-99" required value="<?php echo $dados['cpf'];?>"><br/><br/>

			<label>
				* EMAIL:
			</label><br/>
			<input type="text" name="email" id="email" required value="<?php echo $dados['email'];?>"><br/><br/>

			<label>
				* ENDEREÇO:
			</label><br/>
			<input type="text" name="endereco" id="endereco" required value="<?php echo $dados['endereco'];?>"><br/><br/>

			<label>
				* TELEFONE 1:
			</label><br/>
			<input type="text" name="telefone1" id="telefone1" onkeypress="mascara_telefone1(this)" maxlength="14" placeholder="(99)99999-9999"  required value="<?php echo $dados['telefone1'];?>"><br/><br/>

			<label>
				  TELEFONE 2:
			</label><br/>
			<input type="text" name="telefone2" id="telefone2" onkeypress="mascara_telefone2(this)" maxlength="14" placeholder="(99)99999-9999"  value="<?php echo $dados['telefone2'];?>"><br/><br/>
			
			<!--Botão de edição de usuário-->
			<button type="submit" class="btn-adicionar" name="btn-editar"> Editar Usuário</button>
			<!--Botão de cancelar edição de usuário-->
			<button class="btn-cancelar">
				<a href="home.php">Cancelar Edição</a>
			</button>

		</fieldset>
	</form>
</body>
</html>