<?php
	$sql_exibir_descontos = "SELECT * FROM descontos ORDER BY id ASC";
	$query_exibir_descontos = mysqli_query($conexao, $sql_exibir_descontos) or die(mysqli_error($conexao));
	$exibir_descontos = mysqli_fetch_assoc($query_exibir_descontos);
?>