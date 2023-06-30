<?php 

include __DIR__ . "/../../libs/conexao.php";


$sql = "select a.id, a.nome as alunos, b.id as boletim
        from escolaws.boletins b 
        inner join escolaws.alunos a 
        on b.aluno_id = a.id ";

//statement - declaração
$stm = mysqli_prepare($conn,  $sql);

//executar a consulta.
$stm->execute();

$boletim = $stm->get_result();


include __DIR__ .  "/../../templates/boletins/listar.tpl.html";

$boletim->close();

$stm->close();
$conn->close();
