/*apaga digitados que não são números
$('.numero').keyup(function() {
    $(this).val(this.value.replace(/\D/g, ''));
  });*/

  
//função mostra campo
$('.mostra').click(function() {
  console.log('mostra')
  document.getElementsByClassName('muda-vista').style.display = "hidden";
}); 

//função esconde campo
$('.esconde').click(function() {
  console.log('esconde')
  document.getElementsByClassName('muda-vista').style.display = "none";
});


