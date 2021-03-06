<?php
include('../view/header.php');
include('../view/menu.php');
?>
<div id="iframe" name="iframe">
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
					<div class="div_funcionario">
						<label>Nome Completo</label>
						<input type="text" name="funcionario_name" id="funcionario_name" class="funcionario_padrao" />
					</div>
					<div class="div_funcionario">
						<label>Cargo</label>
						<input type="text" name="funcionario_cargo" id="funcionario_cargo" class="funcionario_padrao" />
					</div>
					<div class="div_funcionario">
						<label>Nível de Permissão</label>
							<select name="funcionario_nivel" id="funcionario_nivel" class="funcionario_padrao">
								<option></option>
								<option value="1">Basico</option>
								<option value="2">Intermediário</option>
								<option value="3">Administrador</option>
							</select>
					</div>
					<div class="div_funcionario">
						<label>CPF</label>
						<input type="text" name="funcionario_cpf" id="funcionario_cpf" class="funcionario_padrao" />
					</div>
					<div class="div_funcionario">
						<label>Telefone</label>
						<input type="text" name="funcionario_telefone" id="funcionario_telefone" class="funcionario_padrao" />
					</div>
					<div class="div_funcionario">
						<label>Endereço</label>
						<input type="text" name="funcionario_endereco" id="funcionario_endereco" class="funcionario_padrao" />
					</div>
					<div class="div_funcionario">
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
					<div class="div_funcionario">
						<label>Data de Admissão</label>
						<input type="text" name="funcionario_data" id="funcionario_data" class="funcionario_padrao" />
					</div>
					<div class="onoffswitch">
						<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
						<label class="onoffswitch-label" for="myonoffswitch">
							<span class="onoffswitch-inner"></span>
							<span class="onoffswitch-switch"></span>
						</label>
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
				<div class="div_funcionario">
				<label>Nome Completo</label>
				<input type="text" name="cad_funcionario_name" id="cad_funcionario_name" class="funcionario_padrao" />
				</div>
				<div class="div_funcionario">
				<label>Cargo</label>
				<input type="text" name="cad_funcionario_cargo" id="cad_funcionario_cargo" class="funcionario_padrao" />
				</div>
				<div class="div_funcionario">
				<label>Nível de Permissão</label>
					<select name="cad_funcionario_nivel" id="cad_funcionario_nivel" class="funcionario_padrao">
						<option value="1">Basico</option>
						<option value="2">Intermediário</option>
						<option value="3">Administrador</option>
					</select>
				</div>
				<div class="div_funcionario">
				<label>CPF</label>
				<input type="text" name="cad_funcionario_cpf" id="cad_funcionario_cpf" class="funcionario_padrao" />
				</div>
				<div class="div_funcionario">
				<label>Telefone</label>
				<input type="text" name="cad_funcionario_telefone" id="cad_funcionario_telefone" class="funcionario_padrao" />
				</div>
				<div class="div_funcionario">
				<label>Endereço</label>
				<input type="text" name="cad_funcionario_endereco" id="cad_funcionario_endereco" class="funcionario_padrao" />
				</div>
				<div class="div_funcionario">
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
				<div class="div_funcionario">
				<label>Data de Admissão</label>
				<input type="text" name="cad_funcionario_data" id="cad_funcionario_data" class="funcionario_padrao" />
				</div>
				<input type="hidden" name="cad_funcionario_status" id="cad_funcionario_status" class="funcionario_padrao" />
			</div>
			<div class="funcionario_botao">
			<input type="submit" name="cad_funcionario_button" id="cad_funcionario_button" value="Cadastrar" class="Bconsulta_funcionario" />
			</div>
		</form>
		</div>
	</div>
</div>
</body>
</html>