<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/produto.css">
</head>
<body>
<?php 
	include_once('../php/conexao.php');
	include_once('php/cadastrar.php');
?>
	<div class="formulario_produto">
		<h2>Cadastro de Produtos</h2>
		<form method="POST" class="cadastro_produto">
			<div>
				<div>
				<label>Código</label>
				<input type="text" id="cad_produto_codigo" name="cad_produto_codigo" class="produto_padrao" />
				</div>
				<div>
				<label>Descrição</label>
				<input type="text" id="cad_produto_descricao" name="cad_produto_descricao" class="produto_padrao" />
				</div>
				<div>
				<label>Marca</label>
				<input type="text" id="cad_produto_marca" name="cad_produto_marca" class="produto_padrao" />
				</div>
				<div>
				<label>Cor</label>
				<input type="text" id="cad_produto_cor" name="cad_produto_cor" class="produto_padrao" />
				</div>
				<div>
				<label>Tamanho</label>
				<input type="text" id="cad_produto_tamanho" name="cad_produto_tamanho" class="produto_padrao" />
				</div>
				<div>
				<label>Quantidade em Estoque</label>
				<input type="text" id="cad_produto_estoque" name="cad_produto_estoque" class="produto_padrao" />
				</div>
				<div>
				<label>Preço de Venda</label>
				<input type="text" id="cad_produto_preco" name="cad_produto_preco" class="produto_padrao" />
				</div>
			</div>
			<div class="produto_botao">
			<input type="submit" id="cad_produto_button" name="cad_produto_button" value="Cadastrar" />
			</div>
		</form>
	</div>
</body>
</html>