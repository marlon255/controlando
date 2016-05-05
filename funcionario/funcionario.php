<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/funcionario.css">
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.min.css">
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</head>
<body>
<?php
	include_once ('../php/conexao.php');
	include_once ('../cad_filial/php/exibir.php');
	include_once ('php/cadastrar.php');
?>
	<div class="formulario_funcionario">
		<h2>Cadastro de Funcionário</h2>
		<!-- BOTÃO PARA CHAMAR O POPUP DE FUNCIONÁRIO -->
		<a href="#dialog" name="modal">
		<div id="loc_funcionario" name="loc_funcionario">Localizar Funcionário</div>
		</a>
		<!-- DIV MODEL PARA LOCALIZAR FUNCIONÁRIO -->
		<div id="boxes" name="popup_loc_func" class="popup_loc_func" style="">
			<div id="dialog" class="window">
				<!-- DIV DO TITULO DO MODEL -->
				<div id="loc_func_title" name="loc_func_title">
					<div id="loc_func_textop" name="loc_func_textop"><span>Localizar Funcionário</span></div>
					<!-- DIV PARA FECHAR POPUP -->
					<div id="loc_func_exit" name="loc_func_exit" class="close"></div>
				</div>
				<!-- CONTEUDO DO MODAL -->
				<div id="loc_func_body" name="loc_func_body">
				<form method="POST" id="buscando" class="cadastro_funcionario">
				<div>
					<div>
						<label>Nome Completo</label>
						<input type="text" name="funcionario_name" id="funcionario_name" class="funcionario_padrao" />
					</div>
					<div>
						<label>Cargo</label>
						<input type="text" name="funcionario_cargo" id="funcionario_cargo" class="funcionario_padrao" />
					</div>
					<div>
						<label>Nível de Permissão</label>
							<select name="funcionario_nivel" id="funcionario_nivel" class="funcionario_padrao">
								<option></option>
								<option value="1">Basico</option>
								<option value="2">Intermediário</option>
								<option value="3">Administrador</option>
							</select>
					</div>
					<div>
						<label>CPF</label>
						<input type="text" name="funcionario_cpf" id="funcionario_cpf" class="funcionario_padrao" />
					</div>
					<div>
						<label>Telefone</label>
						<input type="text" name="funcionario_telefone" id="funcionario_telefone" class="funcionario_padrao" />
					</div>
					<div>
						<label>Endereço</label>
						<input type="text" name="funcionario_endereco" id="funcionario_endereco" class="funcionario_padrao" />
					</div>
					<div>
						<label>Filial Empregado</label>
							<select name="funcionario_filial" id="funcionario_filial" class="funcionario_padrao">
							<option></option>
							<?php
								if($exibir > 0){
									do{
							?>
										<option><?php echo $exibir['nume_filial'];?></option>
							<?php
										}while($exibir = mysqli_fetch_assoc($query));
											}
							?>
							</select>
					</div>
					<div>
						<label>Data de Admissão</label>
						<input type="text" name="funcionario_data" id="funcionario_data" class="funcionario_padrao" />
					</div>
				</div>
				<div>
					<div class="funcionario_botao" style="width: 300px;" >
						<input type="submit" name="salvar_funcionario" id="salvar_funcionario" class="Bconsulta_funcionario" value="Salvar" />
						<input type="submit" name="excluir_funcionario" id="excluir_funcionario" class="Bconsulta_funcionario" value="Excluir" />
					</div>
				</div>
				</form>
			</div>
			</div>
		<div id="mask"></div>
		</div>
		<div>
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
	</div>
</body>
</html>