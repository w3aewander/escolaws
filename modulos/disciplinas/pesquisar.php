<?php

include __DIR__ . "/../../config/config.inc.php";

include __DIR__ . "/../../includes/header.php";

include __DIR__ . "/../../libs/conexao.php";

$sql = 'select * from disciplinas 
        where nome like ? ';

$id = $_REQUEST['id'];
$nome = '%' . $_REQUEST['nome'] . '%';
$data_inicio = $_REQUEST['data_inicio'];
$data_termino = $_REQUEST['data_termino'];

$stm = mysqli_prepare($conn, $sql);

$stm->bind_param('s', $nome);

$stm->execute();

$disciplinas = $stm->get_result();

$stm->close();

$conn->close();

include __DIR__ . "/../../templates/disciplinas/pesquisar.tpl.html";

include __DIR__ . "/../../includes/footer.php";
