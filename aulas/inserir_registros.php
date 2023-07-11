<?php
/**
 * Comandos SQL no PHP.
 */

$json = json_decode(file_get_contents("config.json"));

$conexao = mysqli_connect($json->dbhost, $json->dbuser, $json->dbpass, $json->dbase);

if ( ! $conexao ){
    die('Não foi possível conectar o banco de dados.');
}

//para adicionar apenas um produto
$sql = "INSERT INTO escolaws.produtos(descricao) values ( 'Produto 1' )";

//para adicionar vários produtos;
//$sql = "INSERT INTO escolaws.produtos(descricao) values ( 'Produto 1' ), ('Produto 2'), ('Produto 3')";

if ( mysqli_execute_query($conexao, $sql) ){

    echo "registro inserito com sucesso.";
} else {

    echo "Não foi possível inserir o(s) registro(s).";
}

mysqli_close($conexao);

