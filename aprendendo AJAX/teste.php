<DOCTYPE html>
<html>  
<head>
<meta charset="UTF-8"/>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script>
$(function(){
$("#tabela input").keyup(function(){        
	var index = $(this).parent().index();
	var nth = "#tabela td:nth-child("+(index+1).toString()+")";
	var valor = $(this).val().toUpperCase();
	$("#tabela tbody tr").show();
	$(nth).each(function(){
		if($(this).text().toUpperCase().indexOf(valor) < 0){
			$(this).parent().hide();
		}
	});
});

$("#tabela input").blur(function(){
	$(this).val("");
}); 
});
</script> 
</head>
<body>
    <div id="divConteudo">
        <table id="tabela">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Grupo</th>
                </tr>
                <tr>
                    <th><input type="text" id="txtColuna1"/></th>
                    <th><input type="text" id="txtColuna2"/></th>
                    <th><input type="text" id="txtColuna3"/></th>
                </tr>            
            </thead>
            <tbody>
                <tr>
                    <td>001.01-A</td>
                    <td>Feijão preto</td>
                    <td>Cerais</td>
                </tr>
                <tr>
                    <td>001.02-B</td>
                    <td>Feijão branco</td>
                    <td>Cerais</td>
                </tr>            
                <tr>
                    <td>002.10-C</td>
                    <td>Arroz parboilizado</td>
                    <td>Cerais</td>
                </tr>
                <tr>
                    <td>003.12-D</td>
                    <td>Iogurte de morango</td>
                    <td>Laticínios</td>
                </tr>
                <tr>
                    <td>041.27-E</td>
                    <td>Sabão em pó</td>
                    <td>Limpeza</td>
                </tr>            
            </tbody>
        </table>
    </div>
</body>
</html>

<!--<?php
	if(isset($_POST['consulta_funcionario_button'])){
		if(empty($_POST['consulta_funcionario_nome'])||empty($_POST['consulta_funcionario_cpf'])){
			echo "<script>alert('Digite sua pesquisa antes!')</script>";
		}elseif(!empty($_POST['consulta_funcionario_nome'])||!empty($_POST['consulta_funcionario_cpf'])){
			$nome_completo = $_POST['consulta_funcionario_nome'];
			$cpf_completo = $_POST['consulta_funcionario_cpf'];
			$sql_total = "SELECT * FROM funcionario WHERE nome LIKE '$nome_completo' AND cpf LIKE $cpf_completo";
			$query_total = mysqli_query($conexao, $sql_total) or die(mysqli_errno($conexao));
			
			
			
		}elseif(empty($_POST['consulta_funcionario_nome'])||!empty($_POST['consulta_funcionario_cpf'])){
			
			
		}elseif(!empty($_POST['consulta_funcionario_nome'])||empty($_POST['consulta_funcionario_cpf'])){
			
			
		}
	}
?>-->