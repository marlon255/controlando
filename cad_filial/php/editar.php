<script>
$().ready(function() {
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