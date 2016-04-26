<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/descontos.css">
<script src="../js/jquery.min.js"></script>
<script src="../js/moeda.js"></script>
<script src="js/funcoes.js"></script>
</head>
<body>
<?php
	include_once('../php/conexao.php');
	include_once('php/cadastrar.php');
	include_once('php/exibir_descontos.php');
?>
	<div class="formulario_descontos">
		<h2>Cadastro de Descontos</h2>
		<form method="POST" class="cadastro_descontos">
			<div>
				<div>
				<label>Produto</label>
				<input type="text" id="cad_desconto_produto" name="cad_desconto_produto" class="descontos_padrao" value="" onkeyUp="carregar()" onblur="mudar()" />
				</div>
				<div>
				<label>Valor do Produto</label>
				<input type="hidden" id="cad_desconto_valor" name="cad_desconto_valor" class="descontos_padrao" value=""/>
				<input type="text" id="cad_desconto_valor_new" name="cad_desconto_valor_new" class="descontos_padrao" value="" disabled />
				</div>
				<div>
				<label>Valor do Desconto</label>
				<input type="text" id="cad_desconto_desconto" name="cad_desconto_desconto" class="descontos_padrao" onblur="calcular()" Value="R$0,00" />
				</div>
				<div>
				<label>Valor Final</label>
				<input type="text" id="cad_desconto_final" name="cad_desconto_final" class="descontos_padrao" disabled />
				</div>
			</div>
			<div class="descontos_botao">
				<input type="submit" id="cad_desconto_button" name="cad_desconto_button" class="click" value="Cadastrar" onclick="salvando()" />
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
<?php
	if($exibir_descontos > 0){
		do{
			require('php/deletar.php');
?>
			<form method="POST">
				<input type="hidden" id="id_descontos" name="id_descontos" value="<?=$exibir_descontos['id']?>">
				<input type="text" onkeyUp="carregar_edit()" name="produto_descontos<?=$exibir_descontos['id']?>" id="produto_descontos<?=$exibir_descontos['id']?>" class="Idescontos" value="<?php echo $exibir_descontos['produto']; ?>" disabled />
				<input type="text" name="valor_descontos<?=$exibir_descontos['id']?>" id="valor_descontos<?=$exibir_descontos['id']?>" onblur="calcular_edicao()" class="Idescontos" value="<?php echo $exibir_descontos['valor']; ?>" disabled />
				<input type="text" name="desconto_descontos<?=$exibir_descontos['id']?>" id="desconto_descontos<?=$exibir_descontos['id']?>" onblur="calcular_edicao()" class="Idescontos" value="<?php echo $exibir_descontos['desconto']; ?>" disabled />
				<input type="text" name="final_descontos<?=$exibir_descontos['id']?>" id="final_descontos<?=$exibir_descontos['id']?>" class="Idescontos" value="<?php echo $exibir_descontos['final']; ?>" disabled />
				<input type="submit" name="deletar_descontos<?=$exibir_descontos['id']?>" id="deletar_descontos<?=$exibir_descontos['id']?>" class="click" value="Deletar" />
			</form>
<?php
		}while($exibir_descontos = mysqli_fetch_assoc($query_exibir_descontos));
	}
?>
		</div>
	</div>
</body>
</html>