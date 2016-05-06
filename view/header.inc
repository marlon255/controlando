<html>
<head>
<meta charset="UTF-8">
<title>Controle de Estoque</title>
<link rel="stylesheet" type="text/css" href="../css/menu.css">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<link rel="stylesheet" type="text/css" href="../css/funcionario.css">
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.min.css">
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>
<!--<script type="text/javascript">
$(document).ready(function(){
	$(".bt_url").click(function(){
        $("#iframe").load($(this).data("url"));
    });
});
</script>-->
</head>
<body>
<?php
	include('../php/conexao.php');
	include('../php/cadastrar.php');
?>
	<div class="cabecalho">
		<div class="logo"></div>
		<div class="topo_cabecalho"><i>Mercadinho Irmãos Fydellys</i></div>
		<div class="user">
			<div class="img_user"></div>
			<div class="info_user">Informações do Usuario Online</div>
		</div>
	</div>