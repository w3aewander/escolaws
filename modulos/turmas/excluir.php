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

<h1>Exclusão de aluno</h1>

  <!-- CRUD -->
  <!-- CREATE, RETRIEVE, UPDATE0, DELETE -->
  
 <?php 
 
 $codigo = $_REQUEST['codigo'] ?? ""; 

 
 if ( $codigo ){
   echo "Os dados da turma com o código $codigo serão excluídos da base de dados.";
   //die("Finalizei: $matricula");
   excluirDadosTurma($codigo);
  } else {
    echo "Nenhum código informada para exclusão.";
  }

  ?>

  </div>

  <?php

  //incluindo o arquivo de rodapé...
  include __DIR__ .  "/../../includes/footer.php";

  ?>