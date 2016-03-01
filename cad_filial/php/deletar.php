<?php
	if(isset($_POST['deletar_filial_button'.$exibir_filial_php['id']])){
		$sql_del = "DELETE FROM filial WHERE id = ".$_POST['id_cad_filial'].";";
		$query_del = mysqli_query($conexao, $sql_del) or die (mysqli_error($conexao));
		echo "<script>location.href='filial.php';</script>";
	}
?>