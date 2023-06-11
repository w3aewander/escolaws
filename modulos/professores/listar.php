<?php 

include __DIR__ . "/../../libs/conexao.php";


$sql = "select p.id, p.nome, p.email, 
        date_format(p.data_admissao, '%d/%m/%Y') as data_admissao 
        from professores p";

//statement - declaração
$stm = mysqli_prepare($conn,  $sql);

//executar a consulta.
$stm->execute();

$result = $stm->get_result();

include __DIR__ .  "/../../templates/professores/listar.tpl.html";

$result->close();

$stm->close();
$conn->close();
