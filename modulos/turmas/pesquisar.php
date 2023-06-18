<?php

include __DIR__ . "/../../config/config.inc.php";

include __DIR__ . "/../../includes/header.php";

include __DIR__ . "/../../libs/conexao.php";

include __DIR__ . "/../../libs/libws.php";

$nome = '%' . $_REQUEST['nome'] . '%';
$data_inicio = $_REQUEST['data_inicio'];
$data_termino = $_REQUEST['data_termino'];

$sql = 'select nome, data_inicio, data_termino
        from turmas
        where nome like ? or data_inicio = ? or data_termino = ?';

$stm = mysqli_prepare($conn, $sql);

$stm->bind_param('sss', $nome, $data_inicio, $data_termino);

$stm->execute();

$result = $stm->get_result();

$stm->close();

$conn->close();

include __DIR__ . "/../../templates/turmas/pesquisar.tpl.html";

include __DIR__ . "/../../includes/footer.php";
