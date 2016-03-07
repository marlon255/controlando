<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/descontos.css">
</head>
<body>
<?php
	require_once('../php/conexao.php');
	require_once('php/exibir_produto.php');
?>
	<div class="formulario_descontos">
		<h2>Cadastro de Descontos</h2>
		<form method="POST" class="cadastro_descontos">
			<div>
				<div>
				<label>Produto</label>
				<select type="text" id="cad_desconto_produto" name="cad_desconto_produto" class="descontos_padrao">
				<option>Selecione o Produto</option>
				<?php
					if($roms_produto > 0){
						do{
				?>
					<option><?php echo $roms_produto['descricao']; ?></option>
				<?php
						}while($roms_produto = mysqli_fetch_assoc($query_produto));
					}
				?>
				</select>
				</div>
				<div>
				<label>Valor do Produto</label>
				<input type="text" id="cad_desconto_valor" name="cad_desconto_valor" class="descontos_padrao" />
				</div>
				<div>
				<label>Valor do Desconto</label>
				<input type="text" id="cad_desconto_desconto" name="cad_desconto_desconto" class="descontos_padrao" />
				</div>
				<div>
				<label>Valor Final</label>
				<input type="text" id="cad_desconto_final" name="cad_desconto_final" class="descontos_padrao" />
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
				<input type="hidden" id="id_descontos" name="id_descontos">
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