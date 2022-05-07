
     // Summernote
     $('.summernote').summernote({});

     $('.summernote-conteudo-reuniao').summernote({
      height:150
    });

    $('.summernote-conteudo-aviso').summernote({
      height:150
    });


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

//Libera campo Conjuge
function casado(){
  let valor = document.getElementById('cod_estado_civil').value;
 
     if (valor == 2) {
       $('#conjuge').attr('disabled', false);
     }else{
       $('#conjuge').val('');
       $('#conjuge').attr('disabled', true);
     }
}

//Libera campo de Cadastro dos Filhos
function possuiFilho(){
   let valor = document.getElementById('filho').value;
  
      if (valor == 1) {
        $('#num_filho').attr('disabled', false);
        $('#botao_filho').attr('disabled', false);
        
      }else{
        $('#num_filho').val('');
        $('#num_filho').attr('disabled', true);
        $('#botao_filho').attr('disabled', true);
      }
}

//Modal para cadastro de Filhos
function addFilho(){
  let addFilho = document.getElementById('num_filho').value;
  
  if (addFilho == '' || addFilho == 0) {
    $('#modal-error').modal('show');
  } else if (addFilho >= 1 && addFilho <= 6) {
    $('#modal-default').modal('show');
  } else if (addFilho >= 7) {
    $('#modal-danger').modal('show');
  }
}

//Libera data de batismo
function comunga(){
  let valor = document.getElementById('comunga').value;
 
     if (valor == 1) {
       $('#data_batismo').attr('disabled', false);
     }else{
       $('#data_batismo').val('');
       $('#data_batismo').attr('disabled', true);
     }
}

//Libera Troca de Igreja
function meioAdmissao(){
  let valor = document.getElementById('tipo_admissao').value;
 
     if (valor == 4) {
      $('#addIgreja').collapse('show')
     }else{
      $('#addIgreja').collapse('hide')
     }
}

function addCampo() {
  console.log('falta add função para acrescentar dependentes (filhos)');
}