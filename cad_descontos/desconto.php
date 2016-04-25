<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/descontos.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript">
    function calcular(){
        var produto = document.getElementById("cad_desconto_valor").value;
        var desconto = document.getElementById("cad_desconto_desconto").value;
		var desconto_new = desconto.replace(",", ".").replace("R$","");
        var valor_final = produto - desconto_new;
        var x = document.getElementById("cad_desconto_final").value = "R$"+valor_final;
		var y = x.replace(".", ",");
		document.getElementById("cad_desconto_final").value = y;
    }
</script>
<script>
//função para pegar o objeto ajax do navegador
function xmlhttp()
{
	// XMLHttpRequest para firefox e outros navegadores
	if (window.XMLHttpRequest)
	{
		return new XMLHttpRequest();
	}

	// ActiveXObject para navegadores microsoft
	var versao = ['Microsoft.XMLHttp', 'Msxml2.XMLHttp', 'Msxml2.XMLHttp.6.0', 'Msxml2.XMLHttp.5.0', 'Msxml2.XMLHttp.4.0', 'Msxml2.XMLHttp.3.0','Msxml2.DOMDocument.3.0'];
	for (var i = 0; i < versao.length; i++)
	{
		try
		{
			return new ActiveXObject(versao[i]);
		}
		catch(e)
		{
			alert("Seu navegador não possui recursos para o uso do AJAX!");
		}
	} // fecha for
	return null;
} // fecha função xmlhttp

//função para fazer a requisição da página que efetuará a consulta no DB
function carregar()
{
   a = document.getElementById('cad_desconto_produto').value;
   ajax = xmlhttp();
   if (ajax)
   {
	   ajax.open('get','php/exibir_valor.php?cad_desconto_produto='+a, true);
	   ajax.onreadystatechange = trazconteudo; 
	   ajax.send(null);
   }
}

//função para incluir o conteúdo na pagina
function trazconteudo()
{
	if (ajax.readyState==4)
	{
		if (ajax.status==200)
		{
			document.getElementById('cad_desconto_valor').value = ajax.responseText;
		}
	}
}

</script>
<script>
function mudar(){
	var valor_new = document.getElementById("cad_desconto_valor").value;
	document.getElementById("cad_desconto_valor_new").value = "R$"+valor_new+",00";
}
</script>
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
				<input type="text" id="cad_desconto_desconto" name="cad_desconto_desconto" class="descontos_padrao" onblur="calcular()" value="R$" />
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