
<?php
/**
 * Configurações do sistema 
 */

#define('URL', '"http://localhost/curso/25-03-2023/");
//$url = "http://localhost/curso/25-03-2023/" ;
//const URL = "http://localhost/curso/25-03-2023/" ;

date_default_timezone_set('America/Sao_Paulo');

//chamando a biblioteca de funções do Wander
include __DIR__  . "/../libs/libws.php";

include __DIR__ . "/../libs/libdados.php";

//biblioteca responsável pela exibição dos menus...
include __DIR__  . "/../libs/libmenu.php";

const APP_TITLE = "Escola WS - Pauta Eletrônica";
const APP_NAME = "Aplicação Modular Didática";
const APP_VERSION = "2023.06.09-MySQL";



$dir =  "http://localhost/escolaws/" ;

//Alteração feita apenas para teste...

