<?php
/**
 * Página inicial
 *  
*/
include __DIR__ . "/../../config/config.inc.php";
  
include __DIR__ .  "/../../includes/header.php";

include __DIR__ .  "/../../libs/libws.php";



?>
<div class="container">

<h1>Exclusão de turma</h1>

  <!-- CRUD -->
  <!-- CREATE, RETRIEVE, UPDATE0, DELETE -->
  
 <?php 
 
 $id = $_REQUEST['id'] ?? ""; 

 mostrarAlerta('alert-warning','icon-dislike','Turma não deve ser excluída nesta interface pois há tabelas dependentes.');
 if ( $codigo ){
   echo "Os dados da turma com o código $codigo serão excluídos da base de dados.";
   //die("Finalizei: $matricula");

  } else {
    echo "Nenhum código informada para exclusão.";
  }

  ?>

  </div>

  <?php

  //incluindo o arquivo de rodapé...
  include __DIR__ .  "/../../includes/footer.php";

  ?>