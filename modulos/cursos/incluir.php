<?php

/**
 * Página inicial
 *  
 */
// ele tenta incluir um arquivo
//cabelalho:

include __DIR__ . "/../../config/config.inc.php";
include __DIR__ . "/../../includes/header.php";

include __DIR__ . "/../../libs/conexao.php";

?>

<div class="container">

  <h4>Inclusão de cursos no cadastro</h4>

  <?php

  //variável para "pegar" o método de envio da requisição (request)
  $metodo =  $_SERVER["REQUEST_METHOD"];

  //verifica se o método é igual a  post...
  if ($metodo == "POST") {

    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $data_inicio = $_POST["data_inicio"];
    $data_termino = $_POST["data_termino"];

    if ($codigo) {
      include __DIR__ . "/alterar.php";
    } else {
      $sql = "insert into cursos(nome, data_inicio, data_termino) values (?,?,?)";
      $stm = mysqli_prepare($conn, $sql);
      $stm->bind_param('sss', $nome, $data_inicio, $data_termino);
    }

    if (!$stm->execute()) {

      echo "Não foi possível incluir ou atualizar o registro.";
    }

    $stm->close();
    $conn->close();

    echo "Registro incluído ou atualizado com sucesso. 
          Redirecionando para a página inicial do módulo.";


    header("refresh: 2; $dir/modulos/cursos", true);
  } else {

    include __DIR__ . "/../../templates/cursos/form.tpl.html";
  }
  ?>


  <?php
  //incluindo o arquivo de rodapé...
  include __DIR__ . "/../../includes/footer.php";
  ?>