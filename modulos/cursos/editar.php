<?php
/**
 * Página inicial
 *  
*/
  // ele tenta incluir um arquivo
  //cabelalho: 

  include __DIR__ . "/../../config/config.inc.php";
  
  include __DIR__ .  "/../../includes/header.php";

  //include __DIR__ .  "/../../database/dados.php";

  include __DIR__ . "/../../libs/conexao.php";

  $metodo = $_SERVER['REQUEST_METHOD'];
  
  $codigo = $_REQUEST['id'] ?? '';

  if ( $metodo == 'POST') {
  
    include __DIR__ . '/alterar.php';

  }
  //evitar sql_injection --- use uma consulta preparada.
  $sql = "select * from curso where id = ?";

  $stm = mysqli_prepare($conn, $sql);

  $stm->bind_param('i', $codigo);

  $stm->execute();

  $result = $stm->get_result();
  
  $curso = $result->fetch_assoc();

  include __DIR__ .  "/../../templates/cursos/editar.tpl.html";

  $result->close();
  $stm->close();
  $conn->close();

  include __DIR__ .  "/../../includes/footer.php";


