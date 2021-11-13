function mostraData() {
     
       //Gerando GetDate  
        const data = new Date();

        //Tratando Data
        const weekday = new Array(7);
        weekday[0] = "Domingo";
        weekday[1] = "Segunda-feira";
        weekday[2] = "Terça-feira";
        weekday[3] = "Quarta-feira";
        weekday[4] = "Quinta-feira";
        weekday[5] = "Sexta-feira";
        weekday[6] = "Sábado";

        const month = new Array();
        month[0] = "Janeiro";
        month[1] = "Fevereiro";
        month[2] = "Março";
        month[3] = "Abril";
        month[4] = "Maio";
        month[5] = "Junho";
        month[6] = "Julho";
        month[7] = "Agosto";
        month[8] = "Setembro";
        month[9] = "Outubro";
        month[10] = "Novembro";
        month[11] = "Dezembro";

        var data_completa = data.getDate()+' de '+month[data.getMonth()]+' de '+data.getFullYear();

        //Tratando Hora
        function addZero(i) {
            if (i < 10) { 
                i = "0" + i 
            };
            return i;
        }        
        
        var h = addZero(data.getHours());
        var m = addZero(data.getMinutes());
        var s = addZero(data.getSeconds());
        var mostra_relogio = h + ":" + m + ":" + s;

        //Tratar Periodos diarios
        var periodo = null

        if(h >= 00 && h < 06) {
            periodo = 'Boa Madrugada';
        }else if(h >= 06 && h < 12) {
            periodo = 'Bom Dia';
        }else if (h >= 12 && h < 18) {
            periodo = 'Boa Tarde';
        } else if(h >= 18 && h <= 23) {
            periodo = 'Boa Noite';
        }
        
       /* //Imprimir Periodo
        document.writeln(periodo+'</br>')
        //Imprimir Hora
        document.writeln(mostra_relogio+'</br>')
        //Imprimir Data
        document.writeln(weekday[data.getDay()]+' '+data_completa);*/

        let saudacao = `${periodo} ${mostra_relogio} </br></br> ${weekday[data.getDay()]} </br></br> ${data_completa}`;

        
        document.getElementById('mostra_data').innerHTML = saudacao;

        setTimeout("mostraData()",1000);
};

mostraData();