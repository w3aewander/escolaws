<?php 

include __DIR__ . "/../../libs/conexao.php";


$sql = "select a.id, a.nome, a.email, a.data_matricula, a.curso_id, c.nome as curso 
        from alunos a inner join cursos c on a.curso_id = c.id ";

//statement - declaração
$stm = mysqli_prepare($conn,  $sql);

//executar a consulta.
$stm->execute();

$result = $stm->get_result();

include __DIR__ .  "/../../templates/alunos/listar.tpl.html";

$result->close();

$stm->close();
$conn->close();
