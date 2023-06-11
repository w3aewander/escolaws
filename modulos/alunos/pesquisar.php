<?php 

include __DIR__ . "/../../config/config.inc.php";

include __DIR__ .  "/../../includes/header.php";

include __DIR__ . "/../../libs/conexao.php";

$nome = $_REQUEST['nome'] ?? '';
$email = $_REQUEST['email'] ?? '';

$nome = '%'.$nome.'%';
$email = '%'.$email.'%';

$sql = 'select a.id, a.nome,a.email, a.data_matricula, a.curso_id, c.nome as curso
        from alunos a 
        inner join curso c 
        on a.curso_id = c.id 
        where a.nome like ? or a.email like ?';

$stm = mysqli_prepare($conn, $sql);
$stm->bind_param('ss',  $nome, $email);
$stm->execute();
$result = $stm->get_result();

include __DIR__ .  "/../../templates/alunos/pesquisar.tpl.html";

$stm->close();
$conn->close();

include __DIR__ .  "/../../includes/footer.php";

?>