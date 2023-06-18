<?php 

include __DIR__ . "/../../config/config.inc.php";

include __DIR__ .  "/../../includes/header.php";

include __DIR__ . "/../../libs/conexao.php";


$metodo = $_SERVER["REQUEST_METHOD"];

$codigo = $_REQUEST['codigo'] ?? '';
$nome = $_REQUEST['nome'] ?? '';
$data_inicio = $_REQUEST['data_inicio'] ?? '';
$data_termino = $_REQUEST['data_termino'] ?? '';

$uri = $_SERVER['REQUEST_URI'];

$arr_qs = explode('&', $_SERVER['QUERY_STRING']);


$sql = 'select * from cursos where id = ? 
        or nome like ? 
        or data_inicio = ? 
        or data_termino = ?';


$nome = '%' . $nome . '%';

$stm = mysqli_prepare($conn, $sql);

$stm->bind_param('ssss',$id,$nome,$data_inicio,$data_termino);

$stm->execute();

$result = $stm->get_result();

//die(var_dump($result->fetch_all()));

include __DIR__ .  "/../../templates/cursos/pesquisar.tpl.html";

$result->close();
$stm->close();
$conn->close();

include __DIR__ .  "/../../includes/footer.php";

?>