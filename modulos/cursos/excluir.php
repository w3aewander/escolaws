<?php

/**
 * Página inicial
 *  
 */
include __DIR__ . "/../../config/config.inc.php";
include __DIR__ .  "/../../includes/header.php";
include __DIR__ .  "/../../database/dados.php";

include __DIR__ . "/../../libs/conexao.php";

?>
<div class="container">

  <h1>Exclusão de aluno</h1>

  <?php

  $codigo = $_REQUEST['id'] ?? "";

  if ($codigo) {
  
    $sql = 'delete from curso where id=?';

    $stm = mysqli_prepare($conn, $sql);

    $stm->bind_param('i', $codigo);

    if (!$stm->execute()) {
      echo "Não foi possível excluir o registro.";
    }

    $stm->close();
    $conn->close();
 
    echo "registro excluído com sucesso... redirecionando para a página inicial do módulo, aguarde por favor.";
    header('refresh: 2; index.php');

  } else {
    echo "Nenhum código informado para exclusão.";

    echo "<h4>Informe o código do curso para exclusão.</h4>";

    echo "<form id='form-exluir-curso' name='form-excluir-curso' action='#' method='POST'>";
    echo "<div class='form-group mb-2'>";
    echo "  <label for='codigo'>Código do curso:</label>";
    echo "  <div class='input-group'>";
    echo "    <input type='number' id='id' name='id' placeholder='digite o código para exclusão' class='form-control'>";
    echo "    <button type='submit' class='btn btn-secondary'><i class='fa fa-check fa-fw'></i></button>";
    echo "  </div>";
    echo "</form>";
  }

  ?>

</div>

<?php

//incluindo o arquivo de rodapé...
include __DIR__ .  "/../../includes/footer.php";

?>