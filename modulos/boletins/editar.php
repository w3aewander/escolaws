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

$id = $_REQUEST['id'] ?? '';


$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo == 'POST') {

  if ($id) {

    include __DIR__ . "/../../modulos/boletins/alterar.php";

  } else {

    include __DIR__  . "/../../modulos/boletins/incluir.php";

  }
} else {

  $sql = "select a.id, 
          a.nome as alunos, 
          b.id as boletim
            from escolaws.boletins b 
            inner join escolaws.alunos a 
            on b.aluno_id = a.id
            where id = ? ";

  $stm = mysqli_prepare($conn, $sql);
  $stm->bind_param('i', $id);
  $stm->execute();
  $result = $stm->get_result();
  $aluno = $result->fetch_assoc();
  $stm->close();
  $conn->close();

  include __DIR__ .  "/../../templates/alunos/editar.tpl.html";
}

include __DIR__ .  "/../../includes/footer.php";
