<?php
// ele tenta incluir um arquivo  
//cabelalho: 
 
  include __DIR__ . "/../../config/config.inc.php";
  
  include __DIR__ . "/../../database/dados.php";
  
  include __DIR__ .  "/../../includes/header.php";

  //incluindo o arquivo home.. arquivo inicial

  $menu_alunos = [
    "Inicio"    => ["link" => "$dir/index.php", "icone" => "<i class='fa fa-home fa-fw'></i> Inicio"],
    "Incluir"   => ["link" => "$dir/modulos/alunos/incluir.php", "icone" => "<i class='fa fa-plus fa-fw'></i> Incluir"],
    "Excluir"   => ["link" => "$dir/modulos/alunos/excluir.php", "icone" => "<i class='fa fa-minus fa-fw'></i> Excluir"],
    "Listar"    => ["link" => "$dir/modulos/alunos/listar.php", "icone" => "<i class='fa fa-list fa-fw'></i> Listar"],
    "Pesquisar" => ["link" =>  "$dir/modulos/alunos/pesquisar.php", "icone" => "<i class='fa fa-search fa-fw'></i> Pesquisar"] 
  ];

  include  __DIR__ . "/../../templates/alunos/home.tpl.html";
  
  include __DIR__ .  "/../../templates/alunos/listar.tpl.html";

  //incluindo o arquivo de rodapé...
  include __DIR__ . "/../../includes/footer.php";
