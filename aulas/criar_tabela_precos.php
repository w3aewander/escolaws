<?php
/**
 * Comandos SQL no PHP.
 */

$json = json_decode(file_get_contents("config.json"));

$conexao = mysqli_connect($json->dbhost, $json->dbuser, $json->dbpass, $json->dbname);

if ( ! $conexao ){
    die('Não foi possível conectar o banco de dados.');
}

$sql = "CREATE TABLE IF NOT EXISTS escolaws.precos ( produto_id int not null auto_increment primary key, preco decimal(8,2) )";

if ( mysqli_execute_query($conexao, $sql) ){

    echo "tabela criada com sucesso.";
} else {

    echo "Não foi possível criar a tabela.";
}

mysqli_close($conexao);

