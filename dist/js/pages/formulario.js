/*apaga digitados que não são números
$('.numero').keyup(function() {
    $(this).val(this.value.replace(/\D/g, ''));
  });*/


//Setar campo com ENTER!
/**
NÃO ESTA FUNCIONANDO
*/
$("input", "select", "form") // Busca input e select no form
.keypress(function(e){ // Evento ao pressionar uma tecla válida keypress
   
   var k = e.which || e.keyCode; // Pega o código do evento
   
   if(k == 13){ // se for ENTER
      e.preventDefault(); // Cancela o Submit
      $(this)
      .closest('tr') // Seleciona a linha atual
      .next() // Seleciona a Próxima linha
      .find('input, select') // Busca input ou select
      .first() // Seleciona o primeiro que encontrar
      .focus(); // Foca no elemento
   }

}); 
  
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

//função ADD INPUT
$('.adicionar').click(function() {
//Recupera quantidade de elementos
  var val = document.getElementById('filho').value; //ADD Valor a variavel
  if (val > 6) {
    alert('Número maximo de Filhos é 6');
    document.getElementById('filho').value = '';
  } else {
    if (val != '') { //Verifica se campo é vazio
      for (var i = 1; i <= val; i++) { // Imprime Qtde de campos
        var para = document.createElement("INPUT"); //Cria o Elemento
        //ATRIBUTOS DO ELEMENTO 
          para.id = 'filho'+i;
          para.type = 'text'; 
          para.className = 'form-control';
          para.placeholder ='Nome do filho'+i; 
        //para.innerHTML = "Nome do Filho";
        document.getElementById("area-criacao").appendChild(para);//Imprime Elemento n DIV  
      }
    } else {
      console.log('qtde filho vazia');  
    }    
  }
});
//document.createElement(element) 	Create an HTML element document.createElement(nodename)
//Após a criação do elemento, use o método element .appendChild () ou element .insertBefore () para inseri-lo no documento.
//document.removeChild(element) 	Remove an HTML element

function mudarType(id){
     var campo = document.getElementById('senha'+id);
     var cadeado = document.getElementById(id);

     if (campo.type == 'password') {
      campo.type = 'text';
      cadeado.className = 'fa-solid fa-lock-open';       
     } else {
      campo.type = 'password';
      cadeado.className = 'fa-solid fa-lock';
     }
      console.log(campo,cadeado);

}