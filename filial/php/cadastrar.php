<?php
	if(isset($_POST['botao_filial'])){
		$cnpj = $_POST['cnpj_filial'];
		$fantasia = $_POST['fantasia_filial'];
		$numero = $_POST['numero_filial'];
		$estado = $_POST['estado_filial'];
		$cidade = $_POST['cidade_filial'];
		$data = $_POST['data_filial'];
		
		$sql = "INSERT INTO filial (cnpj, nome_fantas, nume_filial, estado, cidade, data_abertura) 
		VALUES ('$cnpj', '$fantasia', '$numero', '$estado', '$cidade', '$data')";
		$query = mysqli_query($conexao, $sql);
	}
?>