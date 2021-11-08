var dia = 'Bom Dia';
var noite = 'Boa Noite';

/*document.getElementById('texto').innerHTML = dia;*/

function mudar() {
    if ($("#fullpage").hasClass("night")) {
      $("#fullpage").removeClass("night");
      $("#switch").removeClass("switched");
      /*document.getElementById('texto').innerHTML = dia;*/
    } else {
      $("#fullpage").addClass("night");
      $("#switch").addClass("switched");
      /*document.getElementById('texto').innerHTML = noite;*/
    }    
  };