$(function() {

    // Atribui evento e função para limpeza dos campos
    $('#funcionario_name').on('input', limpaCampos);

    // Dispara o Autocomplete a partir do segundo caracter
    $( "#funcionario_name" ).autocomplete({
	    minLength: 1,
	    source: function( request, response ) {
	        $.ajax({
	            url: "consulta.php",
	            dataType: "json",
	            data: {
	            	acao: 'autocomplete',
	                parametro: $('#funcionario_name').val()
	            },
	            success: function(data) {
	               response(data);
	            }
	        });
	    },
	    focus: function( event, ui ) {
	        $("#funcionario_name").val( ui.item.nome );
	        carregarDados();
	        return false;
	    },
	    select: function( event, ui ) {
	        $("#funcionario_name").val( ui.item.nome );
	        return false;
	    }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<div style='cursor: pointer; z-index: 9999;'>" )
        .append( item.nome +"</div>")
        .appendTo( ul );
    };

    // Função para carregar os dados da consulta nos respectivos campos
    function carregarDados(){
    	var busca = $('#funcionario_name').val();

    	if(busca != "" && busca.length >= 2){
    		$.ajax({
	            url: "consulta.php",
	            dataType: "json",	
	            data: {
	            	acao: 'consulta',
	                parametro: $('#funcionario_name').val()
	            },
	            success: function( data ) {
	               $('#funcionario_cargo').val(data[0].cargo);
	               $('#funcionario_nivel').val(data[0].nivel);
	               $('#funcionario_cpf').val(data[0].cpf);
	               $('#funcionario_telefone').val(data[0].telefone);
	               $('#funcionario_endereco').val(data[0].endereco);
	               $('#funcionario_filial').val(data[0].filial);
				   $('#funcionario_data').val(data[0].data);
	            }
	        });
    	}
    }

    // Função para limpar os campos caso a busca esteja vazia
    function limpaCampos(){
       var busca = $('#funcionario_name').val();

       if(busca == ""){
		   $('#funcionario_cargo').val('');
           $('#funcionario_nivel').val('')
           $('#funcionario_cpf').val('');
           $('#funcionario_telefone').val('');
           $('#funcionario_endereco').val('');
           $('#funcionario_filial').val('');
           $('#funcionario_data').val('')
       }
    }
});
$(document).ready(function() {

//seleciona os elementos a com atributo name="modal"
$('a[name=modal]').click(function(e) {
//cancela o comportamento padrão do link
e.preventDefault();

//armazena o atributo href do link
var id = $(this).attr('href');

//armazena a largura e a altura da tela
var maskHeight = $(document).height();
var maskWidth = $(window).width();

//Define largura e altura do div#mask iguais ás dimensões da tela
$('#mask').css({'width':maskWidth,'height':maskHeight});

//efeito de transição
$('#mask').fadeIn(1000);
$('#mask').fadeTo("slow",0.8);

//armazena a largura e a altura da janela
var winH = $(window).height();
var winW = $(window).width();
//centraliza na tela a janela popup
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);
//efeito de transição
$(id).fadeIn(2000);
});

//se o botãoo fechar for clicado
$('.window .close').click(function (e) {
//cancela o comportamento padrão do link
e.preventDefault();
$('#mask, .window').hide();
});

//se div#mask for clicado
$('#mask').click(function () {
$(this).hide();
$('.window').hide();
});
});