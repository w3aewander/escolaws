<?php

/**
 * Página inicial
 *  
 */
include __DIR__ . "/../../config/config.inc.php";

include __DIR__ .  "/../../includes/header.php";

include __DIR__ . "/../../libs/conexao.php";

?>
<div class="container">

  <div class="card mb-4">
    <div class="card-header">
      <div class="card-title">
        <h4><i class="icon-excluir fa-trash"></i> Exclusão de aluno</h4>
      </div>
    </div>
    <div class="card-body">

      <!-- CRUD -->
      <!-- CREATE, RETRIEVE, UPDATE0, DELETE -->

      <?php

      $metodo = $_SERVER['REQUEST_METHOD'];

      $matricula = $_REQUEST['id'] ?? '';


      if ($matricula) {

        $sql = "delete from alunos where id = ?";
        $stm = mysqli_prepare($conn, $sql);
        $stm->bind_param('i', $matricula);

        $stm->execute();

        if (!$stm->affected_rows) {
          mostrarAlerta("alert-warning", "icon-dislike", "Não foi possível excluir o registro. Certifique-se que ele existe na base de dados.");
        } else {
          mostrarAlerta("alert-success", "icon-like", "Os dados do aluno com a matricula $matricula foram excluídos da base de dados..");
        }

        $stm->close();
        $conn->close();

        header('refresh: 2; index.php');
      } else {

        echo "<form action='{$_SERVER["PHP_SELF"]}' method='POST'>
          <label for='id'>Matrícula/ID</label>
          <div class='input-group'>
              <input class='form-control' type='number' name='id' id='id' value='{$matricula}'>
              <button class='btn btn-danger' type='submit'><i class='fa fa-trash'></i> Excluir</button>
          </div>
        </form>";
      }

      ?>

    </div>
  </div>

  <?php include __DIR__ . "/listar.php"; ?>
</div>

<?php

//incluindo o arquivo de rodapé...
include __DIR__ .  "/../../includes/footer.php";

?>