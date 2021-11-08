var dia = 'Write Theme';
var noite = 'Dark Theme';

document.getElementById('texto').innerHTML = dia;

function mudar() {
    if ($("#theme").hasClass("night")) {
      $("#theme").removeClass("night");
      $("#switch").removeClass("switched");
      document.getElementById('texto').innerHTML = dia;
    } else {
      $("#theme").addClass("night");
      $("#switch").addClass("switched");
      document.getElementById('texto').innerHTML = noite;
    }    
  };