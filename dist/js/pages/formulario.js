
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
    
    let i = 1;
    document.querySelector('#nomes_filhos').innerHTML = '';

    while (addFilho >= i) {  
      var div = document.querySelector('#nomes_filhos');
      var element = document.createElement('div');
      element.classList = "row align-items-end";
      element.id = 'div'+i;
      element.innerHTML = `
        <div class="form-group col-12 col-lg-4">
            <label for="nome_filho${i}" class="col-12 control-label">${i}º:</label>
            <div class="col-12">
                <input type="text" class="form-control" id="nome_filho${i}" placeholder="..." name="nome_filho${i}" value="">
            </div>
        </div>
      `;
      div.appendChild(element);
      i++
    }
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
  
  let addFilho = document.getElementById('num_filho').value;
  
  for (let i = 1; i <= addFilho; i++) {
    console.log($(`#nome_filho${i}`).val()+' ID = '+i);
  }
  $('#closead').click();
}