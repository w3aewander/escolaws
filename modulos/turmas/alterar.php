<?php
/**
 * Página inicial
 *  
*/
  // ele tenta incluir um arquivo
  //cabelalho: 


  include __DIR__ . "/../../libs/conexao.php";

  include __DIR__ . "/../../libs/libws.php";

  $sql = 'update turmas 
         set nome = ?, data_inicio = ?, data_termino =  ? where id = ?';

  $stm = mysqli_prepare($conn, $sql);
  $stm->bind_param('sssi', $nome, $data_inicio, $data_termino, $id);

  if ( $stm->execute() ){

       mostrarAlerta('alert-success', 'icon-like', 'registro alterado com sucesso');   
  } else {
       mostrarAlerta('alert-danger', 'icon-dislike', 'não foi possível alterar o registro');
  }

  $stm->close();

  $conn->close();


  header('refresh: 2; index.php');





