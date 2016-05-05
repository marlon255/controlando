<<<<<<< HEAD
<script>
$().ready(function editando() {
	var nome = "#funcionario_nome<?=$exibir_consulta_funcionario['id']?>";
	var cargo = "#funcionario_cargo<?=$exibir_consulta_funcionario['id']?>";
	var nivel = "#funcionario_nivel<?=$exibir_consulta_funcionario['id']?>";
	var cpf = "#funcionario_cpf<?=$exibir_consulta_funcionario['id']?>";
	var telefone = "#funcionario_telefone<?=$exibir_consulta_funcionario['id']?>";
	var endereco = "#funcionario_endereco<?=$exibir_consulta_funcionario['id']?>";
    var filial = "#funcionario_filial<?=$exibir_consulta_funcionario['id']?>";
    var data = "#funcionario_data<?=$exibir_consulta_funcionario['id']?>";
	var click = '#editar_funcionario_button<?=$exibir_consulta_funcionario['id']?>';

    $(click).click(function() {
        $(nome).each(function() {
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
	$(click).click(function() {
        $(cargo).each(function() {
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
	$(click).click(function() {
        $(nivel).each(function() {
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
	$(click).click(function() {
        $(cpf).each(function() {
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
	$(click).click(function() {
        $(telefone).each(function() {
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
	$(click).click(function() {
        $(endereco).each(function() {
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
    $(click).click(function() {
        $(filial).each(function() {
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
    $(click).click(function() {
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
=======
<script>
$().ready(function editando() {
	var nome = "#funcionario_nome<?=$exibir_consulta_funcionario['id']?>";
	var cargo = "#funcionario_cargo<?=$exibir_consulta_funcionario['id']?>";
	var nivel = "#funcionario_nivel<?=$exibir_consulta_funcionario['id']?>";
	var cpf = "#funcionario_cpf<?=$exibir_consulta_funcionario['id']?>";
	var telefone = "#funcionario_telefone<?=$exibir_consulta_funcionario['id']?>";
	var endereco = "#funcionario_endereco<?=$exibir_consulta_funcionario['id']?>";
    var filial = "#funcionario_filial<?=$exibir_consulta_funcionario['id']?>";
    var data = "#funcionario_data<?=$exibir_consulta_funcionario['id']?>";
	var click = '#editar_funcionario_button<?=$exibir_consulta_funcionario['id']?>';

    $(click).click(function() {
        $(nome).each(function() {
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
	$(click).click(function() {
        $(cargo).each(function() {
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
	$(click).click(function() {
        $(nivel).each(function() {
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
	$(click).click(function() {
        $(cpf).each(function() {
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
	$(click).click(function() {
        $(telefone).each(function() {
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
	$(click).click(function() {
        $(endereco).each(function() {
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
    $(click).click(function() {
        $(filial).each(function() {
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
    $(click).click(function() {
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
>>>>>>> origin/master
</script>