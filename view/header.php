<html>
<head>
<meta charset="UTF-8">
<title>Controle de Estoque</title>
<link rel="stylesheet" type="text/css" href="http://localhost/controle financeiro/css/menu.css">
<link rel="stylesheet" type="text/css" href="http://localhost/controle financeiro/css/estilo.css">
<link rel="stylesheet" type="text/css" href="http://localhost/controle financeiro/css/funcionario.css">
<link rel="stylesheet" type="text/css" href="http://localhost/controle financeiro/css/filial.css">
<link rel="stylesheet" type="text/css" href="http://localhost/controle financeiro/css/jquery-ui.min.css">
<script type="text/javascript" src="http://localhost/controle financeiro/js/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost/controle financeiro/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://localhost/controle financeiro/js/custom.js"></script>
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
	include ('C:\UwAmp\www\controle financeiro\php\conexao.php');
	include ('C:\UwAmp\www\controle financeiro\php\consulta.php');
	include ('C:\UwAmp\www\controle financeiro\php\funcoes_filial.php');
?>
	<div class="cabecalho">
		<div class="logo"></div>
		<div class="topo_cabecalho"><i>Mercadinho Irmãos Fydellys</i></div>
		<div class="user">
			<div class="img_user"></div>
			<div class="info_user">Informações do Usuario Online</div>
		</div>
	</div>