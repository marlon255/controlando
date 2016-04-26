function calcular(){
        var produto = document.getElementById("cad_desconto_valor").value;
        var desconto = document.getElementById("cad_desconto_desconto").value;
		var desconto_new = desconto.replace(",", ".").replace("R$","");
        var valor_final = produto - desconto_new;
        var x = document.getElementById("cad_desconto_final").value = "R$"+parseFloat(valor_final.toFixed(2));
		var y = x.replace(".", ",");
		document.getElementById("cad_desconto_final").value = y;
    }
    $(document).ready(function(){
    $("input#cad_produto_preco").maskMoney({showSymbol:true, symbol:"R$", decimal:",", thousands:"."});
	});

function mudar(){
    var valor_new = document.getElementById("cad_desconto_valor").value;
    var valor_novo = valor_new.replace(".",",");
    document.getElementById("cad_desconto_valor_new").value = "R$"+valor_novo;
}


//função para pegar o objeto ajax do navegador
function xmlhttp()
{
    // XMLHttpRequest para firefox e outros navegadores
    if (window.XMLHttpRequest)
    {
        return new XMLHttpRequest();
    }

    // ActiveXObject para navegadores microsoft
    var versao = ['Microsoft.XMLHttp', 'Msxml2.XMLHttp', 'Msxml2.XMLHttp.6.0', 'Msxml2.XMLHttp.5.0', 'Msxml2.XMLHttp.4.0', 'Msxml2.XMLHttp.3.0','Msxml2.DOMDocument.3.0'];
    for (var i = 0; i < versao.length; i++)
    {
        try
        {
            return new ActiveXObject(versao[i]);
        }
        catch(e)
        {
            alert("Seu navegador não possui recursos para o uso do AJAX!");
        }
    } // fecha for
    return null;
} // fecha função xmlhttp

//função para fazer a requisição da página que efetuará a consulta no DB
function carregar()
{
   a = document.getElementById('cad_desconto_produto').value;
   ajax = xmlhttp();
   if (ajax)
   {
       ajax.open('get','php/exibir_valor.php?cad_desconto_produto='+a, true);
       ajax.onreadystatechange = trazconteudo; 
       ajax.send(null);
   }
}

//função para incluir o conteúdo na pagina
function trazconteudo()
{
    if (ajax.readyState==4)
    {
        if (ajax.status==200)
        {
            document.getElementById('cad_desconto_valor').value = ajax.responseText;
        }
    }
}