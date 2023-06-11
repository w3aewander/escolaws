<?php
/**
 * alterar os dados do registro
 *  
*/

  include __DIR__ . "/../../libs/conexao.php";

  $id = $_REQUEST['id'];  //recebe tanto $_GET quanto $_POST
  $nome = $_REQUEST['nome'];
  $email = $_REQUEST['email'];
  $data_admissao = $_REQUEST['data_adminissao'];

  $sql = "update professores set nome=?, email=?, data_admissao=? where id=?";

  $stm = mysqli_prepare($conn, $sql);

  $stm->bind_param('sss', $nome, $email,$data_admissao );

  if ( ! $stm->execute() ){
     echo "<div class='alert alert-warning'><i class='icon-dislike fa-3x'></i> Não foi possível alterar o registro</div>";
    }
    
  $stm->close();
  $conn->close();

  // echo "<div class='alert alert-success'><i class='icon-like fa-2x'></i> Registro alterado com sucesso. Redirecionando para o início do módulo.</div>";
  mostrarAlerta("alert-success", "icon-like", "Registro alterado com sucesso.");
  header('refresh: 2; index.php');