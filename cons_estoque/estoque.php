<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/estoque.css">
</head>
<body>
	<div class="formulario_consulta_estoque">
		<h2>Consulta de Estoque</h2>
		<form method="POST" id="" name="" class="consulta_estoque">
			<div class="le">
				<input type="hidden" id="id_descontos" name="id_consulta_estoque">
				<div>
				<label>Código</label>
				<select type="text" id="" name="" class="consulta_estoque_padrao">
					<option></option>
				</select>
				</div>
				<div>
				<label>Produto</label>
				<select type="text" id="" name="" class="consulta_estoque_padrao">
					<option></option>
				</select>
				</div>
			</div>
			<div class="consulta_estoque_botao">
				<input type="submit" id="" name="" value="Consultar" />
			</div>
			
		</form>
	</div>
	<div>
	<div class="fundo_consulta_estoque">
		<div class="cabecalho_exibir">
			<ul>
				<li>Código</li>
				<li>Produto</li>
				<li>Quant. em Estoque</li>
				<li>Entrada</li>
				<li>Saída</li>
				<li>Ações</li>
			</ul>
		</div>
		<div class="exibir_consulta_estoque">
			<form method="POST">
				<input type="text" name="" id="" class="Iconsulta_estoque" disabled />
				<input type="text" name="" id="" class="Iconsulta_estoque" disabled />
				<input type="text" name="" id="" class="Iconsulta_estoque" disabled />
				<input type="text" name="" id="" class="Iconsulta_estoque" disabled />
				<input type="text" name="" id="" class="Iconsulta_estoque" disabled />
				<input type="button" name="" id="" class="Bconsulta_estoque" value="Editar" />
				<input type="submit" name="" id="" class="Bconsulta_estoque" value="Salvar" />
				<input type="submit" name="" id="" class="Bconsulta_estoque" value="Deletar" />
			</form>
		</div>
	</div>
</body>
</html>