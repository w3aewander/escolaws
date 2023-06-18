<?php
/**
 * Página inicial
 *  
*/
  // ele tenta incluir um arquivo
  //cabelalho: 

  $codigo       = $_REQUEST["codigo"];
  $nome         = $_REQUEST["nome"];
  $data_inicio  = $_REQUEST["data_inicio"];
  $data_termino = $_REQUEST["data_termino"];


    //se o código for informado então a query será para atualizar.
    $sql = "update cursos 
            set nome = ?, 
            data_inicio=?, 
            data_termino=? where id = ?";

    $stm = mysqli_prepare($conn, $sql);
    
    $stm->bind_param('ssss', $nome, $data_inicio, $data_termino, $codigo);