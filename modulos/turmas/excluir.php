<?php
/**
 * Página inicial
 *  
*/
include __DIR__ . "/../../config/config.inc.php";
  
include __DIR__ .  "/../../includes/header.php";

include __DIR__ .  "/../../database/dados.php";



?>
<div class="container">

<h1>Exclusão de turma</h1>

  <!-- CRUD -->
  <!-- CREATE, RETRIEVE, UPDATE0, DELETE -->
  
 <?php 
 
 $id = $_REQUEST['id'] ?? ""; 

 
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