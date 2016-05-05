﻿<html>
<head>
<meta charset="UTF-8">
<title>Controle de Estoque</title>
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/funcionario.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".bt_url").click(function(){
        $("#iframe").load($(this).data("url"));
    });
});
</script>
</head>
<body>
	<div class="cabecalho">
		<div class="logo"></div>
		<div class="topo_cabecalho">Mercadinho</div>
		<div class="user">
			<div class="img_user"></div>
			<div class="info_user">Informações do Usuario Online</div>
		</div>
	</div>
	<div class="conteudo">
		<nav class="menu_lateral">
			<ul>
				<a href="index.php"><li class="menu_item">Início</li></a>
				<li class="menu_item">Cadastro
					<ul class="sub_menu">
						<li>&#8628;</li>
						<a class="bt_url" data-url="cad_filial/filial.php"><li class="sub_menu_item">Filial</li></a>
						<a class="bt_url" data-url="funcionario/funcionario.php"><li class="sub_menu_item">Funcionarios</li></a>
						<a class="bt_url" data-url="cad_fornecedor/fornecedor.php"><li class="sub_menu_item">Fornecedores</li></a>
						<a href="cad_produto/produto.php" target="iframe"><li class="sub_menu_item">Produtos</li></a>
						<a href="cad_cliente/cliente.php" target="iframe"><li class="sub_menu_item">Clientes</li></a>
						<a href="cad_descontos/desconto.php" target="iframe"><li class="sub_menu_item">Descontos</li></a>
					</ul>
				</li>
				<li class="menu_item">Consulta
					<ul class="sub_menu">
						<li>&#8628;</li>
						<a href="cons_funcionario/funcionario.php" target="iframe"><li class="sub_menu_item">Funcionarios</li></a>
						<a href="cons_fornecedor/fornecedor.php" target="iframe"><li class="sub_menu_item">Fornecedores</li></a>
						<a href="cons_produto/produto.php" target="iframe"><li class="sub_menu_item">Produto</li></a>
						<a href="cons_cliente/cliente.php" target="iframe"><li class="sub_menu_item">Clientes</li></a>
						<a href="cons_estoque/estoque.php" target="iframe"><li class="sub_menu_item">Estoque</li></a>
					</ul>
				</li>
				<li class="menu_item">Caixa
					<ul class="sub_menu">
						<li>&#8628;</li>
						<a href="caixa_entrada/caixa_entrada.php" target="iframe"><li class="sub_menu_item">Entrada</li></a>
						<a href="caixa_saida/caixa_saida.php" target="iframe"><li class="sub_menu_item">Saída</li></a>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
	<div id="iframe" name="iframe"></div>
	<div class="rodape">
		<h1>Criado por Marlon Breno Gera</h1>
		<h2><a href="http://www.facebook.com/MarlonBrenoGera" target="_blank">Facebook</a></h2>
	</div>
</body>
</html>