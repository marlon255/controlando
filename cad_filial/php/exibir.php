<?php
	$sql_exibir = "SELECT * FROM filial";
	$query_exibir = mysqli_query($conexao, $sql_exibir);
	$exibir_filial_php = mysqli_fetch_assoc($query_exibir);
?>