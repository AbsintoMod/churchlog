  let dia = 'Write Theme';
  let noite = 'Dark Theme';

  document.getElementById('texto').innerHTML = dia;

  function mudar() {
    if ($("#theme").hasClass("night")) {
      $("#theme").removeClass("night");
      $("#switch").removeClass("switched");

      //$("#div-geral").removeClass("bg-dark");
      document.getElementById('texto').innerHTML = dia;
    } else {
      $("#theme").addClass("night");
      $("#switch").addClass("switched");

      //$("#div-geral").addClass("bg-dark");
      document.getElementById('texto').innerHTML = noite;
    }    
  };


