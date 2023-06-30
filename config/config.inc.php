
<?php
/**
 * Configurações do sistema 
 */

session_start();

ini_set('display_errors', 1);
ini_set('error_reporting',  E_ALL & ~E_WARNING);

date_default_timezone_set('America/Sao_Paulo');

const APP_TITLE   = "Escola WS - Pauta Eletrônica";
const APP_NAME    = "Aplicação Modular Didática";
const APP_VERSION = "2023.06.19-MySQL";


//$dir =  "http://20.206.74.94:8080/" ;
//$dir =  "http://localhost/escolaws/" ;

$dir =  $_SERVER['DOCUMENT_ROOT']. "/escolaws/" ;

//autenticação
if ( ! $_SESSION['AUTHENTICATED'] || ! $_SESSION['AUTHENTICATED'] ){
   header("refresh: 0; {$dir}login.php");
   die();
}

//Alteração feita apenas para teste...

