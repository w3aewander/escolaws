<?php
/**
 * Página inicial
 *  
*/
  // ele tenta incluir um arquivo
  //cabelalho:
  
  include __DIR__ . "/../../config/config.inc.php";
  include __DIR__ . "/../../includes/header.php";

  ?>

  <div class="container">

  <h4>Inclusão de cursos no cadastro</h4>

  <?php
 
     //variável para "pegar" o método de envio da requisição (request)
     $metodo =  $_SERVER["REQUEST_METHOD"];

     //verifica se o método é igual a  post...
     if( $metodo == "POST" ){

      $codigo = $_POST["codigo"];
      $nome = $_POST["nome"];
 
      $info = "$codigo;$nome" ."\n";

      //Inclusão em um arquivo...
      file_put_contents(__DIR__ . "/../../database/cursos.csv", $info, FILE_APPEND);

      //$lista = file_get_contents(__DIR__ . "/../../database/alunos.csv");

      header("location: $dir/modulos/cursos", true);

  
     } 
       //senão...
       else 
     { 
       
      include __DIR__ . "/../../templates/cursos/form.tpl.html";

     }
  ?>


  <?php
  //incluindo o arquivo de rodapé...
  include __DIR__ . "/../../includes/footer.php";
  ?>
