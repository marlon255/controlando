<?php
	$sql_consulta_funcionario = "SELECT * FROM funcionario";
	$query_consulta_funcionario = mysqli_query($conexao, $sql_consulta_funcionario) or die(mysqli_errno($conexao));
	$exibir_consulta_funcionario = mysqli_fetch_assoc($query_consulta_funcionario);
?>