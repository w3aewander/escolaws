<?php
/**
 * Página inicial
 *  
*/
  // ele tenta incluir um arquivo
  //cabelalho: 


  $matricula = $_REQUEST['matricula'];  //recebe tanto $_GET quanto $_POST
  $curso = $_REQUEST['curso'];
  $nome = $_REQUEST['nome'];
  $data_nascimento = $_REQUEST['data_nascimento'];

  $dados = "$matricula;$curso;$nome;$data_nascimento" . "\n";

 alterarDados($matricula, __DIR__ . "/../../database/alunos.csv", $dados);




