<?php
	if(isset($_POST['salvar_filial_button'.$exibir_filial_php['id']])){
		if(empty($_POST['exibir_filial_cnpj'.$exibir_filial_php['id']])&&
		   empty($_POST['exibir_filial_fantasia'.$exibir_filial_php['id']])&&
		   empty($_POST['exibir_filial_numero'.$exibir_filial_php['id']])&&
		   empty($_POST['exibir_filial_estado'.$exibir_filial_php['id']])&&
		   empty($_POST['exibir_filial_cidade'.$exibir_filial_php['id']])&&
		   empty($_POST['exibir_filial_data'.$exibir_filial_php['id']])){
			   echo "<script>alert('Edite algum campo antes de Salvar!')</script>";
		   }else{
			   $cnpj_new 		= $_POST['exibir_filial_cnpj'.$exibir_filial_php['id']];
			   $fantasia_new 	= $_POST['exibir_filial_fantasia'.$exibir_filial_php['id']];
			   $numero_new 		= $_POST['exibir_filial_numero'.$exibir_filial_php['id']];
			   $estado_new 		= $_POST['exibir_filial_estado'.$exibir_filial_php['id']];
			   $cidade_new 		= $_POST['exibir_filial_cidade'.$exibir_filial_php['id']];
			   $data_new 		= $_POST['exibir_filial_data'.$exibir_filial_php['id']];
			   
			   $sql_new = "UPDATE `controle`.`filial` 
			   SET cnpj='$cnpj_new', 
			       nome_fantas='$fantasia_new', 
				   nume_filial='$numero_new', 
				   estado='$estado_new', 
				   cidade='$cidade_new', 
				   data_abertura='$data_new' 
				   WHERE `filial`.`id` = ".$_POST['id_cad_filial'].";";
			   $query_new = mysqli_query($conexao, $sql_new) or die(mysqli_error($conexao));
			   echo "<script>location.href='filial.php';</script>";
		   }
	}
?>