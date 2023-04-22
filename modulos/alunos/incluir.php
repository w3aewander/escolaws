<?php
/**
 * Página inicial
 *  
*/
  // ele tenta incluir um arquivo
  //cabelalho:
  
  include __DIR__ . "/../../config/config.inc.php";
  include __DIR__ . "/../../includes/header.php";
  include_once __DIR__ . "/../../database/dados.php";

  ?>

  <div class="container">

  <h4>Inclusão de alunos no cadastro</h4>

  <?php
 
     //variável para "pegar" o método de envio da requisição (request)
     $metodo =  $_SERVER["REQUEST_METHOD"];

     //verifica se o método é igual a  post...
     if( $metodo == "POST" ){

      $matricula = $_POST["matricula"];
      $curso = $_POST["curso"];
      $nome = $_POST["nome"];
      $data_nascimento = $_POST["data_nascimento"];
 
 
      echo "Dados recebidos:<br>";
      echo "Matricula:" . $matricula .  "<br>";
      echo "Curso:" . $curso . "<br>";
      echo "Nome:" . $nome . "<br>";
      echo "Data de nascimento:" . $data_nascimento . "<br>";

      $info = "$matricula;$curso;$nome;$data_nascimento" ."\n";
      
      $path = __DIR__ . "/../../database/alunos.csv";

      //Inclusão em um arquivo...
      //file_put_contents($path, $info, FILE_APPEND);

      //Também poderia ser:
      $fp = fopen($path, 'a');
      fwrite($fp, $info);
      fclose($fp);

      //$lista = file_get_contents(__DIR__ . "/../../database/alunos.csv");

      header("location: $dir/modulos/alunos", true);

  
     } 
       //senão...
       else 
     { 
       
      include __DIR__ . "/../../templates/alunos/form.tpl.html";

     }
  ?>


  <?php
  //incluindo o arquivo de rodapé...
  include __DIR__ . "/../../includes/footer.php";

  ?>
