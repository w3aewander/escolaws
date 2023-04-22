<?php
// ele tenta incluir um arquivo  
//cabelalho: 
 
  include __DIR__ . "/../../config/config.inc.php";
  
  include __DIR__ .  "/../../includes/header.php";

  $menu_disciplinas = [
    "Inicio" => "$dir/index.php",
    "Incluir" => "$dir/modulos/disciplinas/incluir.php",
    "Excluir" => "$dir/modulos/disciplinas/excluir.php",
    "Listar" => "$dir/modulos/disciplinas/listar.php",
    "Pesquisar" => "$dir/modulos/disciplinas/pesquisar.php", 
  ];

  include __DIR__ .  "/../../templates/disciplinas/home.tpl.html";  

  //incluindo o arquivo de rodapé...
  include __DIR__ . "/../../includes/footer.php";
