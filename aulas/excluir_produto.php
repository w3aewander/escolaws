<?php
/**
 * Comandos SQL no PHP.
 */

$json = json_decode(file_get_contents("config.json"));

$conexao = mysqli_connect($json->dbhost, $json->dbuser, $json->dbpass, $json->dbname);

if ( ! $conexao ){
    die('Não foi possível conectar o banco de dados.');
}

//o valor para a variável $id poderá vir de um formulário, por exemplo.
//$id = 1;
$id = $_REQUEST['id'];

$sql = "DELETE FROM produtos WHERE id = ?";

if ( mysqli_execute_query($conexao, $sql, [$id]) ){

    echo "Registro excluido com sucesso.";
} else {

    echo "Não foi possível excluir o registro.";
}

mysqli_close($conexao);
