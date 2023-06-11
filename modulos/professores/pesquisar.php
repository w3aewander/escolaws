<?php 

include __DIR__ . "/../../config/config.inc.php";

include __DIR__ .  "/../../includes/header.php";

include __DIR__ . "/../../libs/conexao.php";

$nome = $_REQUEST['nome'] ?? '';
$email = $_REQUEST['email'] ?? '';

if ( $nome ){
    $nome = '%'.$nome.'%';
    $email = 'naoinformado@email.com';
} else if  ( $email ){
    $email = '%'.$email.'%';
    $nome = 'não informado';
} else if ( $nome && $email){
    $nome = '%'.$nome.'%';
    $email = '%'.$email.'%';
}

$sql = 'select p.id, p.nome,p.email, date_format(p.data_admissao, "%d/%m/%Y") as data_admissao
        from professores p 
        where p.nome like ? or p.email like ?';

$stm = mysqli_prepare($conn, $sql);
$stm->bind_param('ss',  $nome, $email);
$stm->execute();
$result = $stm->get_result();

$nome = trim($nome);
$email = trim($email);

include __DIR__ .  "/../../templates/professores/pesquisar.tpl.html";

$stm->close();
$conn->close();

include __DIR__ .  "/../../includes/footer.php";

?>