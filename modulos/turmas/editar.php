<?php
/**
 * Página inicial
 *
 */

include __DIR__ . "/../../config/config.inc.php";

include __DIR__ . "/../../includes/header.php";

$id = $_REQUEST['id'] ?? ''; //recebe tanto $_GET quanto $_POST
$nome = $_REQUEST['nome'] ?? '';
$data_inicio = $_REQUEST['data_inicio'] ?? '';
$data_termino = $_REQUEST['data_termino'] ?? '';

$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo == 'POST') {

    if ($id) {
        include __DIR__ . '/alterar.php';
    } else {
        include __DIR__ . '/incluir.php';
    }

} else {

    include __DIR__ . '/../../libs/conexao.php';
    
    $sql = 'select id, nome, data_inicio, data_termino
            from turmas 
            where id = ? ';

    $stm = mysqli_prepare($conn, $sql);

    $stm->bind_param('i', $id);

    $stm->execute();

    $result =  $stm->get_result();

    $turma = $result->fetch_assoc();

    $stm->close();

    $conn->close();


    include __DIR__ . "/../../templates/turmas/editar.tpl.html";

}
include __DIR__ . "/../../includes/footer.php";
