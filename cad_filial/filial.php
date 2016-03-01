﻿<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/filial.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
</head>
<body>
<?php
	include_once ('../php/conexao.php');
	include_once ('php/cadastrar.php');
	include_once ('php/exibir.php');
?>
	<div class="formulario_filial">
		<h2>Filiais</h2>
		<form method="POST" id="cadastro_filial" name="cadastro_filial" class="cadastro_filial">
			<div>
			<label>CNPJ</label>
			<input type="text" name="cnpj_filial" id="cnpj_filial" class="filial_padrao" />
			</div>
			<div>
			<label>Nome Fantasia</label>
			<input type="text" name="fantasia_filial" id="fantasia_filial" class="filial_padrao" />
			</div>
			<div>
			<label>Numero da Filial</label>
			<input type="text" name="numero_filial" id="numero_filial" class="filial_padrao" />
			</div>
			<div>
			<label>Estado</label>
			<input type="text" name="estado_filial" id="estado_filial" class="filial_padrao" />
			</div>
			<div>
			<label>Cidade</label>
			<input type="text" name="cidade_filial" id="cidade_filial" class="filial_padrao" />
			</div>
			<div>
			<label>Data de Abertura</label>
			<input type="text" name="data_filial" id="data_filial" class="filial_padrao" />
			</div>
			<input type="submit" name="botao_filial" id="botao_filial" class="botao_filial" />
		</form>
	</div>
	<div>
	<div class="fundo_filial">
		<div class="cabecalho_exibir">
			<ul>
				<li>CNPJ</li>
				<li>Nome Fantasia</li>
				<li>Numero da Filial</li>
				<li>Estado</li>
				<li>Cidade</li>
				<li>Data de Abertura</li>
				<li>Ações</li>
			</ul>
		</div>
		<div class="exibir_filial">
<?php
	if($exibir_filial_php > 0){
		do{
?>
<?php
	require ('php/editar.php'); require ('php/salvar.php');
?>
			<form method="POST">
				<input type="hidden" name="id_cad_filial" id="id_cad_filial" />
				<input type="text" name="exibir_filial_cnpj<?=$exibir_filial_php['id']?>" id="exibir_filial_cnpj<?=$exibir_filial_php['id']?>" value="<?=$exibir_filial_php ['cnpj']?>" class="Ifilial" disabled />
				<input type="text" name="exibir_filial_fantasia<?=$exibir_filial_php['id']?>" id="exibir_filial_fantasia<?=$exibir_filial_php['id']?>" value="<?=$exibir_filial_php ['nome_fantas']?>" class="Ifilial" disabled />
				<input type="text" name="exibir_filial_numero<?=$exibir_filial_php['id']?>" id="exibir_filial_numero<?=$exibir_filial_php['id']?>" value="<?=$exibir_filial_php ['nume_filial']?>" class="Ifilial" disabled />
				<input type="text" name="exibir_filial_estado<?=$exibir_filial_php['id']?>" id="exibir_filial_estado<?=$exibir_filial_php['id']?>" value="<?=$exibir_filial_php ['estado']?>" class="Ifilial" disabled />
				<input type="text" name="exibir_filial_cidade<?=$exibir_filial_php['id']?>" id="exibir_filial_cidade<?=$exibir_filial_php['id']?>" value="<?=$exibir_filial_php ['cidade']?>" class="Ifilial" disabled />
				<input type="text" name="exibir_filial_data<?=$exibir_filial_php['id']?>" id="exibir_filial_data<?=$exibir_filial_php['id']?>" value="<?=$exibir_filial_php ['data_abertura']?>" class="Ifilial" disabled />
				<input type="button" name="editar_filial_button<?=$exibir_filial_php['id']?>" id="editar_filial_button<?=$exibir_filial_php['id']?>" value="Editar" />
				<input type="submit" name="salvar_filial_button<?=$exibir_filial_php['id']?>" id="salvar_filial_button<?=$exibir_filial_php['id']?>" class="" value="Salvar" />
				<input type="submit" name="deletar_filial_button<?=$exibir_filial_php['id']?>" id="deletar_filial_button<?=$exibir_filial_php['id']?>" class="" value="Deletar" />
			</form>
<?php
		}while($exibir_filial_php = mysqli_fetch_assoc($query_exibir));
	}
?>
		</div>
	</div>
</body>
</html>