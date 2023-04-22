<?php
// ele tenta incluir um arquivo  
//cabelalho: 
 
  include __DIR__ . "/../../config/config.inc.php";
  
  include __DIR__ . "/../../database/dados.php";
  
  include __DIR__ .  "/../../includes/header.php";

  //incluindo o arquivo home.. arquivo inicial

  $menu_turmas = [
    "Inicio" => "$dir/index.php",
    "Incluir" => "$dir/modulos/turmas/incluir.php",
    "Excluir" => "$dir/modulos/turmas/excluir.php",
    "Listar" => "$dir/modulos/turmas/listar.php",
    "Pesquisar" => "$dir/modulos/turmas/pesquisar.php", 
  ];

  include  __DIR__ . "/../../templates/turmas/home.tpl.html";
  
  include __DIR__ .  "/../../templates/turmas/listar.tpl.html";

  //incluindo o arquivo de rodapé...
  include __DIR__ . "/../../includes/footer.php";
