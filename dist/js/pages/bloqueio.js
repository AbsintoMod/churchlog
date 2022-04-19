const screenBody = document.querySelector('#content');
var cont = 4;

locked = false;
	function lockScreen() {
		/*1000 ms = 1 seg*/
		var timeout = 180000
		
		if (locked == true) {
			clearTimeout(lockscreen);
		}
		else {
			lockscreen = setTimeout(function(){
				$('#lockscreen').show();
				locked = true;

				    //função para não permitir atualizar
					window.addEventListener('keydown', function(e) {
						var code = e.which || e.keyCode;
						
						if(locked == true){
							if (code == 116) e.preventDefault();
							else return true;
							alert('Atualização não permitida após bloqueio!');
						}
					});

				//apaga mensagens anteriores
				document.getElementById("msg").innerHTML = " ";
				document.getElementById("msg2").innerHTML = " ";

				//add class BLUR in page				
				screenBody.classList.add('blur');
				
				clearTimeout(lockscreen);

				//contador para auto-logoff / 300000 = 5min
				logoff = setTimeout(() => {
					window.location='../../php/sair.php';				
				}, 300000);

			}, timeout);
		}
	}
	
	$(window).click(function(){
		clearTimeout(lockscreen);
		lockScreen();

	});

	$(window).mousemove(function(){
		clearTimeout(lockscreen);
		lockScreen();
	});

lockScreen();
	
	$('.lockscreen-btn').click(function(){
		
		var lck_senha = document.querySelector('.lockscreen-password');
		console.log(cont);
		
		if (lck_senha.value == 0) { 
			--cont;
			document.getElementById("msg").innerHTML = "Senha de Usuário em branco.";
			document.getElementById("msg2").innerHTML = `Resta ${cont} Tentativa.`;
			
		}else{
	
			const xhttp = new XMLHttpRequest();
			xhttp.onload = function() {
				
				if (this.responseText == '1') {
					locked = false;
					
					//esconde formulário de bloqueio
					$('#lockscreen').hide();
					
					//remove class BLUR in page				
					screenBody.classList.remove('blur');
					
					//reinicia contador de vezes
					cont = 4;
					clearTimeout(logoff);
				}else{
					--cont;
					document.getElementById("msg").innerHTML = 'Senha Incorreta.';
					document.getElementById("msg2").innerHTML = `Resta ${cont} Tentativa.`;
					
				}
			}
			xhttp.open("GET", "../../php/teste.php?q="+lck_senha.value);
			xhttp.send();
		}

		if (cont == 0) {
			console.log('sair');
			window.location='../../php/sair.php';
		}

		lck_senha.value ='';
	});