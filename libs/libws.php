<?php
/**
 * Biblioteca de funções para o sistema modular didático
 * @author Wanderlei Silva  <wander.silva@gmail.com>
 * @version 1.11.1
 * 
 */
 
 // DRY - Don't Repeat Yourself - Não se repita...

 /**
  * Esta função retorna a data e hora local
  * @param none
  * @return $dataHora mixed a data e hora do sistema obtido pela função date do PHP. 
  */
 function mostrarDataHora(){

    $dataHora =  date('d') . " de " 
                           . mesExtenso(date('m'))  
                           . " de " . date('Y') 
                           . " | " . date('H:i:s');
    
    return $dataHora;
 }

 /**
  * Esta função recebe o número refernte ao mês e retorna
  * o nome do mês por extenso
  * @param $mes O numero do mês
  * @return $mes string o mês por extenso.
  */
 function mesExtenso($mes){

   $meses = [
      "01" => "janeiro",
      "02" => "fevereiro",
      "03" => "março",
      "04" => "abril",
      "05" => "maio",
      "06" => "junho",
      "07" => "julho",
      "08" => "agosto",
      "09" => "setembro",
      "10" => "outubro",
      "11" => "novembro",
      "12" => "dezembro",
   ];

   return $meses[$mes];

 }

 /**
  * Exibe uma mensagem de saudação de acordo com o horário do dia...
  */
 function saudacao(){

   $hora = intval(date('H'));

   $mensagem = "";

   if ( $hora <= 6){
      $mensagem = "boa madrugada.";
   } else if ( $hora < 12 ){
      $mensagem = "bom dia.";
   } else if ( $hora < 18) {
      $mensagem = "boa tarde.";
   } else {
      $mensagem = "boa noite";
   }

   return primeiraLetraEmMaiuscula($mensagem);

 }

 function converterEmMaiusculas($str){

   return strtoupper($str);
 }

 function converterEmMinusculas($str){

   return strtolower($str);
 }

 function primeiraLetraEmMaiuscula($str){

   return ucfirst($str);
 }

 function buscarEndereco($cep){
   
 }

 function abrirArquivo($path, $modo='r'){

   $fp = fopen($path, $modo);

   $conteudo = fread($fp, sizeof($fp));

   fclose($fp);

   return $conteudo;

 }
 
 /**
  * Mostra uma mensagem usando o bootstrap
  * @param $tipo String O tipo de mensagem: alert-success, alert-warning, alert-danger, alert-info
  * @return $alerta String A mensagem de alerta estilizada com bootstrap
  * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
  */
 function mostrarAlerta($tipo="alert-success",$icon="icon-like", $mensagem=""){
    $alerta = sprintf("<div class='alert %s'><i class='%s fa-2x'></i> %s</div>", $tipo, $icon, $mensagem);
    echo $alerta;
 }
 

 function cargaHorariaCurso(String $curso): int{
   return 0;
 }