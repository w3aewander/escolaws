
<?php
/**
 * Configurações do sistema 
 */

ini_set('display_errors', 1);
ini_set('error_reporting',  E_ALL & ~E_WARNING);

date_default_timezone_set('America/Sao_Paulo');

//chamando a biblioteca de funções do Wander
//include __DIR__  . "/../libs/libws.php";

//biblioteca responsável pela exibição dos menus...
//include __DIR__  . "/../libs/libmenu.php";

const APP_TITLE   = "Escola WS - Pauta Eletrônica";
const APP_NAME    = "Aplicação Modular Didática";
const APP_VERSION = "2023.06.18-MySQL";

$dir =  "http://localhost/escolaws/" ;

//Alteração feita apenas para teste...

