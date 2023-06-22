<?php
/**
 * alterar os dados do registro
 *  
*/

  include __DIR__ . "/../../libs/conexao.php";

  $matricula = $_REQUEST['id'];  //recebe tanto $_GET quanto $_POST
  $curso_id = $_REQUEST['curso_id'];
  $nome = $_REQUEST['nome'];
  $email = $_REQUEST['email'];
  $data_matricula = $_REQUEST['data_matricula'];

  $sql = "update alunos set nome=?, email=?, curso_id=?, data_matricula=? where id=?";

  $stm = mysqli_prepare($conn, $sql);

  $stm->bind_param('ssssi', $nome, $email,$curso_id, $data_matricula,$matricula );

  if ( ! $stm->execute() ){
     echo "<div class='alert alert-warning'><i class='icon-dislike fa-3x'></i> Não foi possível alterar o registro</div>";
    }
    
  $stm->close();
  $conn->close();

  // echo "<div class='alert alert-success'><i class='icon-like fa-2x'></i> Registro alterado com sucesso. Redirecionando para o início do módulo.</div>";
  mostrarAlerta("alert-success", "icon-like", "Registro alterado com sucesso.");
  header('refresh: 2; index.php');