<?php
/**
 * Página inicial
 *  
*/
  // ele tenta incluir um arquivo
  //cabelalho: 


  include __DIR__ . "/../../libs/conexao.php";

  $sql = 'update turmas 
         set nome = ?, data_inicio = ?, data_termino =  ? where id = ?';

  $stm = mysqli_prepare($conn, $sql);
  $stm->bind_param('sssi', $nome, $data_inicio, $data_termino, $id);

  $stm->execute();

  $stm->close();

  $conn->close();

  header('refresh: 2; index.php');





