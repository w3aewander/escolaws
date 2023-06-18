<?php
// ele tenta incluir um arquivo  
//cabelalho: 
 
  include __DIR__ . "/../../config/config.inc.php";
  include __DIR__ .  "/../../includes/header.php";

  //incluindo o arquivo home.. arquivo inicial
  

  $menu_cursos = [
    "Inicio"    => ["link"=> "$dir"."index.php", "icone" => "<i class='fa fa-home fa-fw'></i>"],
    "Incluir"   => ["link"=> "$dir"."modulos/disciplinas/incluir.php","icone" => "<i class='fa fa-plus-circle fa-fw'></i>"],
    "Excluir"   => ["link"=> "$dir"."modulos/disciplinas/excluir.php","icone" => "<i class='fa fa-minus-circle fa-fw'></i>"],
    "Pesquisar" => ["link"=> "$dir"."modulos/disciplinas/pesquisar.php", "icone" => "<i class='fa fa-search fa-fw'></i>"],
  ];

  
  include  __DIR__ . "/../../templates/disciplinas/home.tpl.html";


  //incluindo o arquivo de rodapé...
  include __DIR__ . "/../../includes/footer.php";
