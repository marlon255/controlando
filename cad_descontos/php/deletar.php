<?php
	if(isset($_POST['deletar_descontos'.$exibir_descontos['id']])){
		$sql_del = "DELETE FROM descontos WHERE id = ".$_POST['id_descontos'].";";
		$query_del = mysqli_query($conexao, $sql_del) or die (mysqli_error($conexao));
		echo "<script>location.href='desconto.php';</script>";
	}
?>