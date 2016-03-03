<?php
	if(isset($_POST['cad_fornecedor_button'])){
		$cnpj = $_POST['cad_fornecedor_cnpj'];
		$social = $_POST['cad_fornecedor_social'];
		$fantasia = $_POST['cad_fornecedor_fantasia'];
		$estadual = $_POST['cad_fornecedor_estadual'];
		$municipal = $_POST['cad_fornecedor_municipal'];
		$estado = $_POST['cad_fornecedor_estado'];
		$cidade = $_POST['cad_fornecedor_cidade'];
		$telefone = $_POST['cad_fornecedor_telefone'];
		$email = $_POST['cad_fornecedor_email'];
		
		$sql_cad_fornecedor = "INSERT INTO fornecedor (cnpj, social, fantasia, estadual, municipal, estado, cidade, telefone, email)
		VALUES ('$cnpj', '$social', '$fantasia', '$estadual', '$municipal', '$estado', '$cidade', '$telefone', '$email')";
		$query_cad_fornecedor = mysqli_query($conexao, $sql_cad_fornecedor) or die(mysqli_error($conexao));
	}
?>