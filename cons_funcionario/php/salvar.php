<?php
	if(isset($_POST['salvar_funcionario_button'.$exibir_consulta_funcionario['id']])){
		if(empty($_POST['funcionario_nome'.$exibir_consulta_funcionario['id']])&&
			empty($_POST['funcionario_cargo'.$exibir_consulta_funcionario['id']])&&
			empty($_POST['funcionario_nivel'.$exibir_consulta_funcionario['id']])&&
			empty($_POST['funcionario_cpf'.$exibir_consulta_funcionario['id']])&&
			empty($_POST['funcionario_telefone'.$exibir_consulta_funcionario['id']])&&
			empty($_POST['funcionario_endereco'.$exibir_consulta_funcionario['id']])&&
			empty($_POST['funcionario_filial'.$exibir_consulta_funcionario['id']])&&
			empty($_POST['funcionario_data'.$exibir_consulta_funcionario['id']])){
			   echo "<script>alert('Edite algum campo antes de Salvar!')</script>";
		   }else{
			   $nome_new	= $_POST['funcionario_nome'.$exibir_consulta_funcionario['id']];
			   $cargo_new	= $_POST['funcionario_cargo'.$exibir_consulta_funcionario['id']];
			   $nivel_new	= $_POST['funcionario_nivel'.$exibir_consulta_funcionario['id']];
			   $cpf_new		= $_POST['funcionario_cpf'.$exibir_consulta_funcionario['id']];
			   $telefone_new= $_POST['funcionario_telefone'.$exibir_consulta_funcionario['id']];
			   $endereco_new= $_POST['funcionario_endereco'.$exibir_consulta_funcionario['id']];
			   $filial_new	= $_POST['funcionario_filial'.$exibir_consulta_funcionario['id']];
			   $data_new	= $_POST['funcionario_data'.$exibir_consulta_funcionario['id']];
			   
			   $sql_new = "UPDATE `controle`.`funcionario`  
			   SET nome='$nome_new', 
			       cargo='$cargo_new', 
				   nivel='$nivel_new',
				   cpf='$cpf_new', 
				   telefone='$telefone_new', 
				   endereco='$endereco_new',
				   filial='$filial_new',
				   data='$data_new'
				   WHERE `funcionario`.`id` = ".$_POST['id_consulta_funcionario'].";";
			   $query_new = mysqli_query($conexao, $sql_new) or die(mysqli_error($conexao));
			   echo "<script>location.href='funcionario.php';</script>";
		   }
	}
?>