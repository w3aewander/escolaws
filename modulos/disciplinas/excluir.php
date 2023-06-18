<?php
/**
 * Página inicial
 *  
*/
include __DIR__ . "/../../config/config.inc.php";
  
include __DIR__ .  "/../../includes/header.php";




include __DIR__ . "/../../libs/libws.php";

?>
<div class="container">

<h1>Exclusão de disciplina</h1>


<?php 
 
 $id = $_REQUEST['id'] ?? ''; 


 if ( !$id ){
    mostrarAlerta('alert-warning','icon-dislike', 'Nenhuma matrícula informada para exclusão.');
  } else {

    include __DIR__ . "/../../libs/conexao.php";

    $sql = "delete from disciplinas where id = ? ";
    
    $stm = mysqli_prepare($conn, $sql);

    $stm->bind_param('i', $id);

    
    if ( $stm->execute() ){
      mostrarAlerta('alert-success','icon-like', 'registro excluído com sucesso.');
    } else {
      mostrarAlerta('alert-danger','icon-dislike', 'Erro ao tentar excluir o registro.');
    }

    $stm->close();
    $conn->close();
  }

  header('refresh: 2; index.php');

  ?>

  </div>

  <?php

  //incluindo o arquivo de rodapé...
  include __DIR__ .  "/../../includes/footer.php";

  ?>

