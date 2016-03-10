<?php
	require_once('../../php/conexao.php');
?>
<?php
	$busca = $_GET['cad_desconto_produto'];
	
	if($busca != "") {
	$sql_valor = "SELECT * FROM produto WHERE descricao LIKE '$busca' ORDER BY descricao ASC";
	$query_valor = mysqli_query($conexao, $sql_valor) or die(mysqli_error($conexao));
		
		//loop para mostrar a busca
		while($row = mysqli_fetch_assoc($query_valor)) {
			echo $row['preco'];
		}
	}
?>