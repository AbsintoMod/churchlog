//Limpa valores do formulário de cep.
document.getElementById('cep').value = "";
document.getElementById('rua').value = "";
document.getElementById('bairro').value = "";
document.getElementById('cidade').value = "";
document.getElementById('uf').value = "";

function pesquisacep(valor) {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value = "Buscando";
    document.getElementById('bairro').value = "Buscando";
    document.getElementById('cidade').value = "Buscando";
    document.getElementById('uf').value = "Buscando";

    var cep = valor.replace(/\D/g, '');

    console.log(cep)
    //Cria um elemento javascript.
    var script = document.createElement('script');
    //Sincroniza com o callback.
    script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
    
    console.log(script)
    }
