<?php

/**
 * Editar alunos
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0
 *  
 */

include __DIR__ . "/../../config/config.inc.php";
include __DIR__ .  "/../../includes/header.php";
include __DIR__ . "/../../libs/conexao.php";


$codigo = $_REQUEST['id'] ?? '';


$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo == 'POST') {

  if ($codigo) {

    include __DIR__ . "/../../modulos/alunos/alterar.php";

  } else {

    include __DIR__  . "/../../modulos/alunos/incluir.php";

  }
} else {

  $sql = "select * from professores where id = ?";
  $stm = mysqli_prepare($conn, $sql);
  $stm->bind_param('i', $codigo);
  $stm->execute();
  $result = $stm->get_result();
  $professor = $result->fetch_assoc();
  $stm->close();
  $conn->close();

  include __DIR__ .  "/../../templates/alunos/editar.tpl.html";
}

include __DIR__ .  "/../../includes/footer.php";
