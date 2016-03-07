<?php
	$sql_produto = "SELECT * FROM produto";
	$query_produto = mysqli_query($conexao, $sql_produto) or die(mysqli_error($conexao));
	$roms_produto = mysqli_fetch_assoc($query_produto);
?>