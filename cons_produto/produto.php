<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/produto.css">
</head>
<body>
	<div class="formulario_consulta_produto">
		<h2>Consulta de Produtos</h2>
		<form method="POST" id="" name="" class="consulta_produto">
			<div class="le">
				<input type="hidden" id="id_descontos" name="id_consulta_produto">
				<div>
				<label>Código</label>
				<select type="text" id="" name="" class="consulta_produto_padrao">
					<option></option>
				</select>
				</div>
				<div>
				<label>Descrição</label>
				<select type="text" id="" name="" class="consulta_produto_padrao">
					<option></option>
				</select>
				</div>
			</div>
			<div class="consulta_produto_botao">
				<input type="submit" id="" name="" value="Consultar" />
			</div>
			
		</form>
	</div>
	<div>
	<div class="fundo_consulta_produto">
		<div class="cabecalho_exibir">
			<ul>
				<li>Código</li>
				<li>Descrição</li>
				<li>Marca</li>
				<li>Cor</li>
				<li>Tamanho</li>
				<li>Preço de Venda</li>
				<li>Quant. em Estoque</li>
				<li>Ações</li>
			</ul>
		</div>
		<div class="exibir_consulta_produto">
			<form method="POST">
				<input type="text" name="" id="" class="Iconsulta_produto" disabled />
				<input type="text" name="" id="" class="Iconsulta_produto" disabled />
				<input type="text" name="" id="" class="Iconsulta_produto" disabled />
				<input type="text" name="" id="" class="Iconsulta_produto" disabled />
				<input type="text" name="" id="" class="Iconsulta_produto" disabled />
				<input type="text" name="" id="" class="Iconsulta_produto" disabled />
				<input type="text" name="" id="" class="Iconsulta_produto" disabled />
				<input type="button" name="" id="" class="Bconsulta_produto" value="Editar" />
				<input type="submit" name="" id="" class="Bconsulta_produto" value="Salvar" />
				<input type="submit" name="" id="" class="Bconsulta_produto" value="Deletar" />
			</form>
		</div>
	</div>
</body>
</html>