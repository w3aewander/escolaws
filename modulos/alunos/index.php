<?php
/**
 * Arquivo principal do módulo
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0
 * 
 */

include __DIR__ . "/../../config/config.inc.php";
include __DIR__ .  "/../../includes/header.php";

$menu_alunos = [
  "Inicio"    => ["link" => "$dir" . "modulos/alunos/index.php", "icone" => "<i class='fa fa-home fa-fw'></i>"],
  "Incluir"   => ["link" => "$dir" . "modulos/alunos/incluir.php", "icone" => "<i class='fa fa-plus-circle fa-fw'></i>"],
  "Excluir"   => ["link" => "$dir" . "modulos/alunos/excluir.php", "icone" => "<i class='fa fa-minus-circle fa-fw'></i>"],
  "Pesquisar" => ["link" => "$dir" . "modulos/alunos/pesquisar.php", "icone" => "<i class='fa fa-search fa-fw'></i>"],
];

include  __DIR__ . "/../../templates/alunos/home.tpl.html";

//incluindo o arquivo de rodapé...
include __DIR__ . "/../../includes/footer.php";
