<?php 

include __DIR__  . '/../../libs/conexao.php';

$sql = "select * from disciplinas";

$stm = mysqli_prepare($conn, $sql);
$stm->execute();

$disciplinas = $stm->get_result();

include __DIR__ .  "/../../templates/disciplinas/listar.tpl.html";


$disciplinas->close();

$stm->close();

$conn->close();



?>