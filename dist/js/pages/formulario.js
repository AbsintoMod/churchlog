/*apaga digitados que não são números
$('.numero').keyup(function() {
    $(this).val(this.value.replace(/\D/g, ''));
  });*/

  
//função mostra campo
$('.mostra').click(function() {
  var x,y,z = '';
  console.log('mostra');
  
  //Cria Array de todos os elementos com a mesma Class
  x = document.getElementsByClassName('mostra');
    //Seta Primeiro elemento encontrado
  x[0].classList.add("active");//ADD Class
  
  //Cria Array de todos os elementos com a mesma Class
  y = document.getElementsByClassName('esconde');
    //Seta Primeiro elemento encontrado
  y[0].classList.remove("active");//REMOVE Class

  //Cria Array de todos os elementos com a mesma Class
  z = document.getElementsByClassName('campo-de-efeito');
  //Seta elementos encontrado
  z[0].style.display = "block";
}); 

//função esconde campo
$('.esconde').click(function() {
  var x,y,z = '';
  console.log('esconde');

  //Cria Array de todos os elementos com a mesma Class
  x = document.getElementsByClassName('esconde');
    //Seta Primeiro elemento encontrado
  x[0].classList.add("active");//ADD Class
  
  //Cria Array de todos os elementos com a mesma Class
  y = document.getElementsByClassName('mostra');
    //Seta Primeiro elemento encontrado
  y[0].classList.remove("active");//REMOVE Class

  //Cria Array de todos os elementos com a mesma Class
  z = document.getElementsByClassName('campo-de-efeito');
  //Seta elementos encontrado
  z[0].style.display = "none";
});

$('.adicionar').click(function() {
//ADD Variavel
  var valor = '';
//ADD Valor a variavel
  $(this).val(valor);

  if (valor === '') {
    console.log('Valor vazio');
  } else {
    console.log(valor);  
  }
  
});
//document.createElement(element) 	Create an HTML element document.createElement(nodename)
//Após a criação do elemento, use o método element .appendChild () ou element .insertBefore () para inseri-lo no documento.
//document.removeChild(element) 	Remove an HTML element