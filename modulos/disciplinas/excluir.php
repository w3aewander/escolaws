<?php
/**
 * Página inicial
 *  
*/
include __DIR__ . "/../../config/config.inc.php";
  
include __DIR__ .  "/../../includes/header.php";

?>
<div class="container">

<h1>Exclusão de aluno</h1>


<?php 
 
 $matricula = $_GET['matricula'] ?? ""; 
 
 if ( $matricula ){
   echo "Os dados do aluno com a matricula $matricula serão excluídos da base de dados.";
   excluirDadosAluno($matricula);
   
  } else {
    echo "Nenhuma matrícula informada para exclusão.";
  }

  ?>

  </div>

  <?php

  //incluindo o arquivo de rodapé...
  include __DIR__ .  "/../../includes/footer.php";

  ?>

