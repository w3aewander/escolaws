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

   <h4>Inclusão de turma no cadastro</h4>

   <?php



   //variável para "pegar" o método de envio da requisição (request)
   $metodo =  $_SERVER["REQUEST_METHOD"];



   $nome      = $_REQUEST["nome"];
   $data_inicio = $_REQUEST["data_inicio"];
   $data_termino = $_REQUEST["data_termino"];

   if ($metodo == 'POST') {

      $sql = " insert into turmas(nome, data_inicio, data_termino) 
               values(?,?,?);";

      $stm = mysqli_prepare($conn, $sql);

      $stm->bind_param('sss', $nome, $data_inicio, $data_termino);

      if (!$stm->execute()) {
         echo "<div class='alert alert-warning'>Não foi possível incluir o registro.</div>";
      }

      echo "<div class='alert alert-success' style='width: 70%'><i class='icon-like'></i> Registro incluido com sucesso.</div>";

      $stm->close();
      $conn->close();

      //redireciona para o index do módulo após 2 segundos...
      header('refresh: 2; index.php', true);
   } else {
      include __DIR__ . "/../../templates/turmas/form.tpl.html";
   }


   ?>

   <?php
   //incluindo o arquivo de rodapé...
   include __DIR__ . "/../../includes/footer.php";

   ?>