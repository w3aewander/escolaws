<?php
/**
 * Comandos SQL no PHP.
 */

$json = json_decode(file_get_contents("config.json"));

$conexao = mysqli_connect($json->dbhost, $json->dbuser, $json->dbpass, $json->dbase);

if ( ! $conexao ){
    die('Não foi possível conectar o banco de dados.');
}

//apaga todos o registros de uma tabela - reiniciando o incremento
$sql = "TRUNCATE TABLE escolaws.produtos";

if ( mysqli_execute_query($conexao, $sql) ){

    echo "registros excluídos com sucesso.";
} else {

    echo "Não foi possível truncar/exluir os registros registro(s).";
}

mysqli_close($conexao);

