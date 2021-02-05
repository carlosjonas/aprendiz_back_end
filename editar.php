<?php
//Linkando com a conexão
require_once 'acao/conexao.php';

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
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
	<meta id="viewport" name="viewport" content="width=device-width" />
	<script type="text/javascript" src="assets/js/mascaras.js">
	</script>
	<script src="https://kit.fontawesome.com/7b2c34bc68.js" crossorigin="anonymous"></script>
</head>
<body>
	<h1>Editar CLientes</h1>

	<p>Os campos com <em>*</em> são obrigatórios !</p>

		<br/>

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
			<input type="text" name="rg" id="rg" maxlength="12" placeholder="9999999999-9" onkeyup="mascara_rg()"required value="<?php echo $dados['rg'];?>"><br/><br/>
			<label>
				* CPF:
			</label><br/>
			<input type="text" name="cpf" id="cpf" maxlength="14" onkeyup="mascara_cpf()" placeholder="999.999.999-99" required value="<?php echo $dados['cpf'];?>"><br/><br/>
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
			<input type="text" name="telefone1" id="telefone1" onkeyup="mascara_telefone1()" maxlength="14" placeholder="(99)99999-9999"  required value="<?php echo $dados['telefone1'];?>"><br/><br/>
			<label>
				  TELEFONE 2:
			</label><br/>
			<input type="text" name="telefone2" id="telefone2" onkeyup="mascara_telefone2()" maxlength="14" placeholder="(99)99999-9999"  value="<?php echo $dados['telefone2'];?>"><br/><br/>

			<button type="submit" class="btn-adicionar" name="btn-editar"> Editar cliente</button>
			<button class="btn-cancelar">
				<a href="home.php">Cancelar Edição</a>
			</button>

		</fieldset>
	</form>
</body>
</html>