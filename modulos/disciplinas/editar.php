<?php
/**
 * Página inicial
 *
 */
// ele tenta incluir um arquivo
//cabelalho:

include __DIR__ . "/../../config/config.inc.php";

include __DIR__ . "/../../includes/header.php";

include __DIR__ . '/../../libs/conexao.php';

$id = $_REQUEST['id'] ?? '';

$sql = "select * from disciplinas where id = ?";

$stm = mysqli_prepare($conn, $sql);
$stm->bind_param('i', $id);
$stm->execute();

$result = $stm->get_result();

$disciplina = $result->fetch_assoc();

$stm->close();
$conn->close();


$metodo = $_SERVER['REQUEST_METHOD'];

$id = $_REQUEST['id'] ?? '';
$nome = $_REQUEST['nome'];
$carga_horaria = $_REQUEST['carga_horaria'];


if ($metodo == 'POST') {

    if ($id) {

        include __DIR__ . "/alterar.php";

    } else {

        include __DIR__ . "/incluir.php";

    }

} else {

    include __DIR__ . "/../../templates/disciplinas/editar.tpl.html";

}

include __DIR__ . "/../../includes/footer.php";
