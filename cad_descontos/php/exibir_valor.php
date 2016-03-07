<?php
	require_once('../../php/conexao.php');
?>
<?php
	$pvalor = $_POST['cad_desconto_produto'];
	$sql_valor = "SELECT preco FROM produto WHERE descricao = '".$pvalor."'";
	$query_valor = mysqli_query($conexao, $sql_valor) or die(mysqli_error($conexao));
	$exibir_valor = mysqli_fetch_assoc($query_valor);
?>