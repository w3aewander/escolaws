<?php
// ele tenta incluir um arquivo  
//cabelalho: 
 
  include __DIR__ . "/../../config/config.inc.php";
  
  include __DIR__ . "/../../database/dados.php";
  
  include __DIR__ .  "/../../includes/header.php";

  //incluindo o arquivo home.. arquivo inicial

  $menu_pautas = [
    "Inicio" => "$dir/index.php",
    "Aulas" => "$dir/modulos/pautas/aulas/",
    "Conteúdo" => "$dir/modulos/pautas/conteudo/", 
    "Frequência" => "$dir/modulos/pautas/frequencia/",
  ];

  include  __DIR__ . "/../../templates/pautas/home.tpl.html";
  
//   include __DIR__ .  "/../../templates/pautas/listar.tpl.html";

  //incluindo o arquivo de rodapé...
  include __DIR__ . "/../../includes/footer.php";
