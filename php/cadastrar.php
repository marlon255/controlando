<?php
	if(isset($_POST['cad_funcionario_button'])){
		$nome = $_POST['cad_funcionario_name'];
		$cargo = $_POST['cad_funcionario_cargo'];
		$nivel = $_POST['cad_funcionario_nivel'];
		$cpf = $_POST['cad_funcionario_cpf'];
		$telefone = $_POST['cad_funcionario_telefone'];
		$endereco = $_POST['cad_funcionario_endereco'];
		$filial_numero = $_POST['cad_funcionario_filial'];
		$data_admissao = $_POST['cad_funcionario_data'];
		$status = "1";
		
		$sql_cad_funcionario = "INSERT INTO funcionario (nome, cargo, nivel, cpf, telefone, endereco, filial, data, status)
		VALUES ('$nome','$cargo','$nivel','$cpf','$telefone','$endereco','$filial_numero','$data_admissao', '$status')";
		$query_cad_funcionario = mysqli_query($conexao, $sql_cad_funcionario) or die (mysqli_error($conexao));
		header('location: index.php');
	}
?>
<?php
	$sql = "SELECT * FROM filial ORDER BY id ASC";
	$query = mysqli_query($conexao, $sql);
	$exibir = mysqli_fetch_assoc($query);
?>