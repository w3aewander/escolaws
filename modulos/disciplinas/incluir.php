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

  <h4>Inclusão de disciplinas no cadastro</h4>

  <?php
 
     //variável para "pegar" o método de envio da requisição (request)
     $metodo =  $_SERVER["REQUEST_METHOD"];

     //verifica se o método é igual a  post...
     if( $metodo == "POST" ){

      $codigo = $_POST["codigo"];
      $nome = $_POST["nome"];
      

      $info = "$codigo;$nome" ."\n";
      
      $path = __DIR__ . "/../../database/disciplinas.csv";

      //Inclusão em um arquivo...
      //file_put_contents($path, $info, FILE_APPEND);

      //Também poderia ser:
      $fp = fopen($path, 'a');
      fwrite($fp, $info);
      fclose($fp);

      header("location: $dir/modulos/disciplinas", true);

  
     } 
       //senão...
       else 
     { 
       
      include __DIR__ . "/../../templates/disciplinas/form.tpl.html";

     }
  ?>


  <?php
  //incluindo o arquivo de rodapé...
  include __DIR__ . "/../../includes/footer.php";

  ?>
