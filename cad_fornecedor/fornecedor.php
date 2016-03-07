<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/fornecedor.css">
</head>
<body>
<?php
	include_once('../php/conexao.php');
	include_once('php/cadastrar.php');
?>
	<div class="formulario_fornecedor">
		<h2>Cadastro de Fornecedores</h2>
		<form method="POST" id="" name="" class="cadastro_fornecedor">
			<div>
				<div>
				<label>CNPJ</label>
				<input type="text" name="cad_fornecedor_cnpj" id="cad_fornecedor_cnpj" class="fornecedor_padrao">
				</div>
				<div>
				<label>Razão Social</label>
				<input type="text" name="cad_fornecedor_social" id="cad_fornecedor_social" class="fornecedor_padrao">
				</div>
				<div>
				<label>Nome Fantasia</label>
				<input type="text" name="cad_fornecedor_fantasia" id="cad_fornecedor_fantasia" class="fornecedor_padrao">
				</div>
				<div>
				<label>Inscrição Estadual</label>
				<input type="text" name="cad_fornecedor_estadual" id="cad_fornecedor_estadual" class="fornecedor_padrao">
				</div>
				<div>
				<label>Inscrição Municipal</label>
				<input type="text" name="cad_fornecedor_municipal" id="cad_fornecedor_municipal" class="fornecedor_padrao">
				</div>
				<div>
				<label>Estado</label>
				<input type="text" name="cad_fornecedor_estado" id="cad_fornecedor_estado" class="fornecedor_padrao">
				</div>
				<div>
				<label>Cidade</label>
				<input type="text" name="cad_fornecedor_cidade" id="cad_fornecedor_cidade" class="fornecedor_padrao">
				</div>
				<div>
				<label>Telefone</label>
				<input type="text" name="cad_fornecedor_telefone" id="cad_fornecedor_telefone" class="fornecedor_padrao">
				</div>
				<div>
				<label>E-mail</label>
				<input type="text" name="cad_fornecedor_email" id="cad_fornecedor_email" class="fornecedor_padrao">
				</div>
			</div>
			<div class="fornecedor_botao">
			<input type="submit" name="cad_fornecedor_button" id="cad_fornecedor_button" value="Cadastrar" />
			</div>
		</form>
	</div>
</body>
</html>