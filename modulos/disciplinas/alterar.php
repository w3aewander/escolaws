<?php
/**
 * alterar os dados do registro
 *
 */

include __DIR__ . "/../../libs/conexao.php";

include __DIR__ . "/../../libs/libws.php";

$id = $_REQUEST['id']; //recebe tanto $_GET quanto $_POST
$nome = $_REQUEST['nome'];
$carga_horaria = $_REQUEST['carga_horaria'];



$sql = "update disciplinas
         set nome=?,
         carga_horaria=?
         where id=?";

$stm = mysqli_prepare($conn, $sql);

$stm->bind_param('sii', $nome, $carga_horaria, $id);

if (!$stm->execute()) {
    echo "<div class='alert alert-warning'><i class='icon-dislike fa-3x'></i> Não foi possível alterar o registro</div>";
} else {
    // echo "<div class='alert alert-success'><i class='icon-like fa-2x'></i> Registro alterado com sucesso. Redirecionando para o início do módulo.</div>";
    mostrarAlerta("alert-success", "icon-like", "Registro alterado com sucesso.");
}

$stm->close();
$conn->close();

header('refresh: 2; index.php');
