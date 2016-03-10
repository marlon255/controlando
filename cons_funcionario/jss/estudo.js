$(function(){ 

  $("#filtro").keyup(function(){
    var texto = $(this).val();
    
    $(".bloco").each(function(){
      var resultado = $(this).text().toUpperCase().indexOf(' '+texto.toUpperCase());
      
      if(resultado < 0) {
        $(this).fadeOut();
      }else {
        $(this).fadeIn();
      }
    }); 

  });

});
<div class="busca">
   <input id="filtro" type="text" placeholder="Busca Rápida">
</div>
<div class="blocos">
  <div class="bloco">
    <h3>Este é o Titulo 1</h3>
    <p>Um texto para o bloco de numero 1</p>
  </div>
  
  <div class="bloco">
    <h3>Este é o Titulo 2</h3>
    <p>alguma coisa ai para ser diferente do resto</p>
  </div>
  
  <div class="bloco">
    <h3>Este é o Titulo 3</h3>
    <p>vamos diferenciar o bloco 3 também</p>
  </div>
  
  <div class="bloco">
    <h3>Este é o Titulo 4</h3>
    <p>com o bloco 4 não pode ser diferente</p>
  </div>
  
  <div class="bloco">
    <h3>Este é o Titulo 5</h3>
    <p>não sei o que escrever no bloco 5</p>
  </div>
  
  <div class="bloco">
    <h3>Este é o Titulo 5</h3>
    <p>esse vai com o mesmo titulo para ficar legal</p>
  </div>
  
  <div class="bloco">
    <h3>Este é o Titulo 3</h3>
    <p>o com o mesmo titulo do bloco 3</p>
  </div>
  
  <div class="bloco">
    <h3>Este é o Titulo 1</h3>
    <p>Um texto para o bloco de numero 1</p>
  </div>
  
  <div class="bloco">
    <h3>Este é o Titulo 1</h3>
    <p>Um texto para o bloco de numero 1</p>
  </div>
</div>