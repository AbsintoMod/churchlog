/*apaga digitados que não são números
$('.numero').keyup(function() {
    $(this).val(this.value.replace(/\D/g, ''));
  });*/
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();
  
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });
  
    // Summernote
    $('.summernote').summernote();
    
    $('.summernote-conteudo-reuniao').summernote({
      height:150
    });

    $('.summernote-conteudo-aviso').summernote({
      height:150
    });

  });
  

//Função para MOSTAR campo
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

//Função para ESCONDER campo
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

//função ADICIONAR INPUT
$('.adicionar').click(function() {
//Recupera quantidade de elementos
  var val = document.getElementById('filho').value; //ADD Valor a variavel
  if (val > 6) {
    alert('Número maximo de Filhos é 6');
    document.getElementById('filho').value = '';
  } else {
    if (val != '') { //Verifica se campo é vazio
      for (var i = 1; i <= val; i++) { // Imprime Qtde de Input
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
      //console.log('qtde filho vazia');  
    }    
  }
});

//criar função para deletar campo
//document.removeChild(element) 	Remove an HTML element

//usado para MOSTRAR e ESCONDER senha 
function mudarType(id){
     var campo = document.getElementById('senha'+id);//id do INPUT
     var cadeado = document.getElementById(id);//id do CADEADO

     if (campo.type == 'password') {
      campo.type = 'text'; //muda type do input
      cadeado.className = 'fa-solid fa-lock-open';//muda para cadeado aberto       
     } else {
      campo.type = 'password';//muda type do input
      cadeado.className = 'fa-solid fa-lock';//muda para cadeado fechado
     }
      //console.log(campo,cadeado);

};