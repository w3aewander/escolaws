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
 
 $matricula = $_REQUEST['matricula'] ?? ""; 

 
 if ( $matricula ){
   echo "Os dados do aluno com a matricula $matricula foram excluídos da base de dados.";
   //die("Finalizei: $matricula");
   excluirDados($matricula, __DIR__ . "/../../database/alunos.csv");
  } else {
    echo "Nenhuma matrícula informada para exclusão.";
  }

  ?>

  </div>

  <?php

  //incluindo o arquivo de rodapé...
  include __DIR__ .  "/../../includes/footer.php";

  ?>

