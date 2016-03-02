<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/funcionario.css">
</head>
<body>
<?php
	include_once ('../php/conexao.php');
	include_once ('../cad_filial/php/exibir.php');
	include_once ('php/cadastrar.php');
?>
	<div class="formulario_funcionario">
		<h2>Cadastro de Funcionário</h2>
		<form method="POST" class="cadastro_funcionario">
			<div>
				<div>
				<label>Nome Completo</label>
				<input type="text" name="cad_funcionario_name" id="cad_funcionario_name" class="funcionario_padrao" />
				</div>
				<div>
				<label>Cargo</label>
				<input type="text" name="cad_funcionario_cargo" id="cad_funcionario_cargo" class="funcionario_padrao" />
				</div>
				<div>
				<label>Nível de Permissão</label>
					<select name="cad_funcionario_nivel" id="cad_funcionario_nivel" class="funcionario_padrao">
						<option value="1">Basico</option>
						<option value="2">Intermediário</option>
						<option value="3">Administrador</option>
					</select>
				</div>
				<div>
				<label>CPF</label>
				<input type="text" name="cad_funcionario_cpf" id="cad_funcionario_cpf" class="funcionario_padrao" />
				</div>
				<div>
				<label>Telefone</label>
				<input type="text" name="cad_funcionario_telefone" id="cad_funcionario_telefone" class="funcionario_padrao" />
				</div>
				<div>
				<label>Endereço</label>
				<input type="text" name="cad_funcionario_endereco" id="cad_funcionario_endereco" class="funcionario_padrao" />
				</div>
				<div>
				<label>Filial Empregado</label>
					<select name="cad_funcionario_filial" id="cad_funcionario_filial" class="funcionario_padrao">
					<?php
						if($exibir_filial_php > 0){
							do{
					?>
						<option><?php echo $exibir_filial_php['nume_filial'];?></option>
					<?php
							}while($exibir_filial_php = mysqli_fetch_assoc($query_exibir));
						}
					?>
					</select>
				</div>
				<div>
				<label>Data de Admissão</label>
				<input type="text" name="cad_funcionario_data" id="cad_funcionario_data" class="funcionario_padrao" />
				</div>
			</div>
			<div class="funcionario_botao">
			<input type="submit" name="cad_funcionario_button" id="cad_funcionario_button" value="Cadastrar" />
			</div>
		</form>
	</div>
</body>
</html>