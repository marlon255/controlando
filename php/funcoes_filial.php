<?php
	include('conexao.php');
	$sql_exibir = "SELECT * FROM filial ORDER BY id ASC";
	$query_exibir = mysqli_query($conexao, $sql_exibir);
	$exibir_filial_php = mysqli_fetch_assoc($query_exibir);
	
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
if(isset($_POST['botao_filial'])){
		$cnpj = $_POST['cnpj_filial'];
		$fantasia = $_POST['fantasia_filial'];
		$numero = $_POST['numero_filial'];
		$estado = $_POST['estado_filial'];
		$cidade = $_POST['cidade_filial'];
		$data = $_POST['data_filial'];
		
		$sql = "INSERT INTO filial (cnpj, nome_fantas, nume_filial, estado, cidade, data_abertura) 
		VALUES ('$cnpj', '$fantasia', '$numero', '$estado', '$cidade', '$data')";
		$query = mysqli_query($conexao, $sql);
		echo "<script>alert('Dados cadastado com sucesso!');location.href='filial.php';</script>";
	}
if(isset($_POST['deletar_filial_button'.$exibir_filial_php['id']])){
		$sql_del = "DELETE FROM filial WHERE id = ".$_POST['id_cad_filial'].";";
		$query_del = mysqli_query($conexao, $sql_del) or die (mysqli_error($conexao));
		echo "<script>location.href='filial.php';</script>";
	}
?>
<script>
$().ready(function editando() {
	var cnpj = "#exibir_filial_cnpj<?=$exibir_filial_php['id']?>";
	var fantasia = "#exibir_filial_fantasia<?=$exibir_filial_php['id']?>";
	var numero = "#exibir_filial_numero<?=$exibir_filial_php['id']?>";
	var estado = "#exibir_filial_estado<?=$exibir_filial_php['id']?>";
	var cidade = "#exibir_filial_cidade<?=$exibir_filial_php['id']?>";
	var data = "#exibir_filial_data<?=$exibir_filial_php['id']?>";
	
    $('#editar_filial_button<?=$exibir_filial_php['id']?>').click(function() {
        $(cnpj).each(function() {
            if ($(this).attr('disabled')) {
                $(this).removeAttr('disabled');
            }
            else {
                $(this).attr({
                    'disabled': 'disabled'
                });
            }
        });
    });
	$('#editar_filial_button<?=$exibir_filial_php['id']?>').click(function() {
        $(fantasia).each(function() {
            if ($(this).attr('disabled')) {
                $(this).removeAttr('disabled');
            }
            else {
                $(this).attr({
                    'disabled': 'disabled'
                });
            }
        });
    });
	$('#editar_filial_button<?=$exibir_filial_php['id']?>').click(function() {
        $(numero).each(function() {
            if ($(this).attr('disabled')) {
                $(this).removeAttr('disabled');
            }
            else {
                $(this).attr({
                    'disabled': 'disabled'
                });
            }
        });
    });
	$('#editar_filial_button<?=$exibir_filial_php['id']?>').click(function() {
        $(estado).each(function() {
            if ($(this).attr('disabled')) {
                $(this).removeAttr('disabled');
            }
            else {
                $(this).attr({
                    'disabled': 'disabled'
                });
            }
        });
    });
	$('#editar_filial_button<?=$exibir_filial_php['id']?>').click(function() {
        $(cidade).each(function() {
            if ($(this).attr('disabled')) {
                $(this).removeAttr('disabled');
            }
            else {
                $(this).attr({
                    'disabled': 'disabled'
                });
            }
        });
    });
	$('#editar_filial_button<?=$exibir_filial_php['id']?>').click(function() {
        $(data).each(function() {
            if ($(this).attr('disabled')) {
                $(this).removeAttr('disabled');
            }
            else {
                $(this).attr({
                    'disabled': 'disabled'
                });
            }
        });
    });
});
</script>