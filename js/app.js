/**
 * Javascript ...
 */


const months = [
               "janeiro", "fevereiro", "março", 
               "abril", "maio", "junho", 
               "julho", "agosto", "setembro",
               "outubro", "novembro", "dezembro"];

const relogio = () => {

   const data = new Date();
   let dia = data.getDate();
   let mes = data.getMonth();
   let ano = data.getFullYear(); 
   let horas = data.getHours();
   let minutes = data.getMinutes();
   let seconds = data.getSeconds();

   if ( parseInt(dia) <= 0 ){
       dia = "0"+ dia;
   }

   if ( parseInt(horas) <= 9){
      horas = "0" + horas;
   }

   if ( parseInt(minutes) <= 9){
      minutes = "0" + minutes;
   }

   if ( parseInt(seconds) <= 9){
      seconds = "0"+    seconds;
   }

       
  let dataHora = dia + " de " + months[mes] + " de " + ano + "|" + horas + ":" + minutes +   ":" + seconds ; 
  
  return dataHora;
   
}

setInterval(() => {
   document.getElementById('div-relogio').innerHTML = relogio() ;
 }, 1000  );

