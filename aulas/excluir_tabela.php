<?php
/**
 * Comandos SQL no PHP.
 */

$json = json_decode(file_get_contents("config.json"));

$conexao = mysqli_connect($json->dbhost, $json->dbuser, $json->dbpass, $json->dbase);

if ( ! $conexao ){
    die('Não foi possível conectar o banco de dados.');
}

$sql = "DROP TABLE IF EXISTS escolaws.produtos";

if ( mysqli_execute_query($conexao, $sql) ){

    echo "tabela excluida com sucesso.";
} else {

    echo "Não foi possível excluir a tabela.";
}

mysqli_close($conexao);

