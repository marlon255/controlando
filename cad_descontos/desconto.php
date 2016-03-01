<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/descontos.css">
</head>
<body>
	<div class="formulario_descontos">
		<h2>Cadastro de Clientes</h2>
		<form method="POST" id="" name="" class="cadastro_descontos">
			<div>
				<input type="hidden" id="id_descontos" name="id_descontos">
				<div>
				<label>Produto</label>
				<select type="text" id="" name="" class="descontos_padrao">
					<option></option>
				</select>
				</div>
				<div>
				<label>Valor do Produto</label>
				<input type="text" id="" name="" class="descontos_padrao" />
				</div>
				<div>
				<label>Valor do Desconto</label>
				<input type="text" id="" name="" class="descontos_padrao" />
				</div>
				<div>
				<label>Valor Final</label>
				<input type="text" id="" name="" class="descontos_padrao" />
				</div>
			</div>
			<div class="descontos_botao">
				<input type="submit" id="" name="" value="Cadastrar" />
			</div>
			
		</form>
	</div>
	<div>
	<div class="fundo_descontos">
		<div class="cabecalho_exibir">
			<ul>
				<li>Produto</li>
				<li>Valor do Produto</li>
				<li>Valor do Desconto</li>
				<li>Valor Final</li>
				<li>Ações</li>
			</ul>
		</div>
		<div class="exibir_descontos">
			<form method="POST">
				<input type="text" name="" id="" class="Idescontos" disabled />
				<input type="text" name="" id="" class="Idescontos" disabled />
				<input type="text" name="" id="" class="Idescontos" disabled />
				<input type="text" name="" id="" class="Idescontos" disabled />
				<input type="button" name="" id="" class="Bdescontos" value="Editar" />
				<input type="submit" name="" id="" class="Bdescontos" value="Salvar" />
				<input type="submit" name="" id="" class="Bdescontos" value="Deletar" />
			</form>
		</div>
	</div>
</body>
</html>