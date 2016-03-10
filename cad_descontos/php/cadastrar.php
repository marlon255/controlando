<script>
$().ready(function salvando() {
	var valor = "#cad_desconto_valor";
	var var_final = "#cad_desconto_final";
	
    $('#cad_desconto_button').click(function() {
        $(valor).each(function() {
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
	$('#cad_desconto_button').click(function() {
        $(var_final).each(function() {
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
<?php
	if(isset($_POST['cad_desconto_button'])){
		$produto = $_POST['cad_desconto_produto'];
		$valor = $_POST['cad_desconto_valor'];
		$desconto = $_POST['cad_desconto_desconto'];
		$final = $_POST['cad_desconto_final'];
		
		$sql_cad_desconto = "INSERT INTO descontos (produto, valor, desconto, final) 
		VALUES ('$produto', '$valor', '$desconto', '$final')";
		$query_cad_desconto = mysqli_query($conexao, $sql_cad_desconto) or die(mysqli_error($conexao));
	}
?>