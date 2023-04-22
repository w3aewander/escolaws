<?php
/**
 * Página inicial
 *  
*/
  // ele tenta incluir um arquivo
  //cabelalho: 

  $codigo = $_REQUEST['codigo'];  //recebe tanto $_GET quanto $_POST
  $nome = $_REQUEST['nome'];


  $dados = "$codigo;$nome" . "\n";;

  alterarDados($codigo, __DIR__ . "/../../database/cursos.csv", $dados);

