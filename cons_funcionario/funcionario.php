<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/funcionario.css">
</head>
<body>
<?php
	require_once('../php/conexao.php');
	require_once('php/exibir.php');
?>
	<div class="formulario_consulta_funcionario">
		<h2>Consulta de Funcionario</h2>
		<form method="POST" class="consulta_funcionario">
			<div class="le">
				<div>
				<label>Funcionário</label>
				<input type="text" id="consulta_funcionario_nome" name="consulta_funcionario_nome" class="consulta_funcionario_padrao">
				</div>
				<div>
				<label>CPF</label>
				<input type="text" id="consulta_funcionario_cpf" name="consulta_funcionario_cpf" class="consulta_funcionario_padrao">
				</div>
			</div>
			<div class="consulta_funcionario_botao">
				<input type="submit" id="consulta_funcionario_button" name="consulta_funcionario_button" value="Consultar" />
			</div>
		</form>
	</div>
	<div>
	<div class="fundo_consulta_funcionario">
		<div class="cabecalho_exibir">
			<ul>
				<li>Nome Completo</li>
				<li>Cargo</li>
				<li>Nível de Permissão</li>
				<li>CPF</li>
				<li>Telefone</li>
				<li>Endereço</li>
				<li>Filial Empregada</li>
				<li>Data de Admissão</li>
				<li>Ações</li>
			</ul>
		</div>
		<div class="exibir_consulta_funcionario">
<?php
	if($exibir_consulta_funcionario > 0){
		do{
?>
			<form method="POST">
				<input type="hidden" id="id_descontos" name="id_consulta_funcionario" value="<?=$exibir_consulta_funcionario['id']?>">
				<input type="text" name="funcionario_nome<?=$exibir_consulta_funcionario['id']?>" id="funcionario_nome<?=$exibir_consulta_funcionario['id']?>" class="Iconsulta_funcionario" value="<?=$exibir_consulta_funcionario['nome']?>" disabled />
				<input type="text" name="funcionario_cargo<?=$exibir_consulta_funcionario['id']?>" id="funcionario_cargo<?=$exibir_consulta_funcionario['id']?>" class="Iconsulta_funcionario" value="<?=$exibir_consulta_funcionario['cargo']?>" disabled />
				<input type="text" name="funcionario_nivel<?=$exibir_consulta_funcionario['id']?>" id="funcionario_nivel<?=$exibir_consulta_funcionario['id']?>" class="Iconsulta_funcionario" value="<?=$exibir_consulta_funcionario['nivel']?>" disabled />
				<input type="text" name="funcionario_cpf<?=$exibir_consulta_funcionario['id']?>" id="funcionario_cpf<?=$exibir_consulta_funcionario['id']?>" class="Iconsulta_funcionario" value="<?=$exibir_consulta_funcionario['cpf']?>" disabled />
				<input type="text" name="funcionario_telefone<?=$exibir_consulta_funcionario['id']?>" id="funcionario_telefone<?=$exibir_consulta_funcionario['id']?>" class="Iconsulta_funcionario" value="<?=$exibir_consulta_funcionario['telefone']?>" disabled />
				<input type="text" name="funcionario_endereco<?=$exibir_consulta_funcionario['id']?>" id="funcionario_endereco<?=$exibir_consulta_funcionario['id']?>" class="Iconsulta_funcionario" value="<?=$exibir_consulta_funcionario['endereco']?>" disabled />
				<input type="text" name="funcionario_filial<?=$exibir_consulta_funcionario['id']?>" id="funcionario_filial<?=$exibir_consulta_funcionario['id']?>" class="Iconsulta_funcionario" value="<?=$exibir_consulta_funcionario['filial']?>" disabled />
				<input type="text" name="funcionario_data<?=$exibir_consulta_funcionario['id']?>" id="funcionario_data<?=$exibir_consulta_funcionario['id']?>" class="Iconsulta_funcionario" value="<?=$exibir_consulta_funcionario['data']?>" disabled />
				<input type="button" name="" id="" class="Bconsulta_funcionario" value="Editar" />
				<input type="submit" name="" id="" class="Bconsulta_funcionario" value="Salvar" />
				<input type="submit" name="" id="" class="Bconsulta_funcionario" value="Deletar" />
			</form>
<?php
		}while($exibir_consulta_funcionario = mysqli_fetch_assoc($query_consulta_funcionario));
	}
?>
		</div>
	</div>
</body>
</html>