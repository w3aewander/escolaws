<?php 

include __DIR__ . "/../../libs/conexao.php";

$sql = "select * from alunos";

$stm = mysqli_prepare($conn, $sql);

$stm->execute();

$result = $stm->get_result();

include __DIR__ .  "/../../templates/alunos/listar.tpl.html";

$result->close();
$stm->close();
$conn->close();
