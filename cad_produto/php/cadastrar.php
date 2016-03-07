<?php
	if(isset($_POST['cad_produto_button'])){
		$codigo = $_POST['cad_produto_codigo'];
		$descricao = $_POST['cad_produto_descricao'];
		$marca = $_POST['cad_produto_marca'];
		$cor = $_POST['cad_produto_cor'];
		$tamanho = $_POST['cad_produto_tamanho'];
		$estoque = $_POST['cad_produto_estoque'];
		$preco = $_POST['cad_produto_preco'];
		
		$sql_cad_produto = "INSERT INTO produto (codigo, descricao, marca, cor, tamanho, estoque, preco) 
		VALUES ('$codigo', '$descricao', '$marca', '$cor', '$tamanho', '$estoque', '$preco')";
		$query_cad_produto = mysqli_query($conexao, $sql_cad_produto) or die(mysqli_error($conexao));
	}
?>