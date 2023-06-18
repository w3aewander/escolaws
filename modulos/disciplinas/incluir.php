<?php
/**
 * Incluir alunos
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0
 *  
*/
  
  include __DIR__ . "/../../config/config.inc.php";
  include __DIR__ . "/../../includes/header.php";

  include __DIR__ . "/../../libs/conexao.php";

  ?>

  <div class="container">

  <h4>Inclusão de disciplina no cadastro</h4>

  <?php
 
     //variável para "pegar" o método de envio da requisição (request)
     $metodo =  $_SERVER["REQUEST_METHOD"];

     //verifica se o método é  post...
     //se for POST vai incluir 
     if( $metodo == "POST" ){

       $codigo = $_REQUEST["id"];
       $nome      = $_REQUEST["nome"];
       $carga_horaria = $_REQUEST["carga_horaria"];

      $sql = " insert into disciplinas(nome, carga_horaria) 
               values(?, ?);";
    
      $stm = mysqli_prepare($conn, $sql);

      $stm->bind_param('ss', $nome, $carga_horaria);

      if ( ! $stm->execute() ){
         echo "<div class='alert alert-warning'>Não foi possível incluir o registro.</div>";
      }

      echo "<div class='alert alert-success' style='width: 70%'><i class='icon-like'></i> Registro incluido com sucesso.</div>";
      
      $stm->close();
      $conn->close();

      //redireciona para o index do módulo após 2 segundos...
      header('refresh: 2; index.php', true);
  
     } else { 
       
      include __DIR__ . "/../../templates/disciplinas/form.tpl.html";

     }
  ?>

  <?php
  //incluindo o arquivo de rodapé...
  include __DIR__ . "/../../includes/footer.php";

  ?>
