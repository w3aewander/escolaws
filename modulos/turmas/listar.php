<?php

include __DIR__ . "/../../config/config.inc.php";

include __DIR__ . "/../../includes/header.php";

include __DIR__ . "/../../libs/conexao.php";

$sql = "select id, nome,
         date_format(data_inicio, '%d/%m/%Y') as data_inicio,
         date_format(data_termino, '%d/%m/%Y') as data_termino
       from turmas";

$stm = mysqli_prepare($conn, $sql);

$stm->execute();

$result = $stm->get_result();

$stm->close();

$conn->close();

include __DIR__ . "/../../templates/turmas/listar.tpl.html";

include __DIR__ . "/../../includes/footer.php";
