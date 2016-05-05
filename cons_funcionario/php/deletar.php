<?php
	if(isset($_POST['excluir_funcionario_button'.$exibir_consulta_funcionario['id']])){
		$sql_del = "DELETE FROM funcionario WHERE id = ".$_POST['id_consulta_funcionario'].";";
		$query_del = mysqli_query($conexao, $sql_del) or die (mysqli_error($conexao));
		echo "<script>location.href='funcionario.php';</script>";
	}
?>