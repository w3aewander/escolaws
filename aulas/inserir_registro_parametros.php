<?php
/**
 * Comandos SQL no PHP.
 */

$json = json_decode(file_get_contents("config.json"));

$conexao = mysqli_connect($json->dbhost, $json->dbuser, $json->dbpass, $json->dbname);

if ( ! $conexao ){
    die('Não foi possível conectar o banco de dados.');
}

//$produto1 = "Arroz Calafate";
//$produto1 = "Arroz Tio João";

$produto1 = $_REQUEST['descricao'];

//para adicionar apenas um produto
$sql = "INSERT INTO escolaws.produtos(descricao) values ( ? )";

//inserindo registro com o parâmetro fornecido.
if ( mysqli_execute_query($conexao, $sql, [$produto1]) ){

    echo "registro inserido com sucesso.";
} else {

    echo "Não foi possível inserir o(s) registro(s).";
}

mysqli_close($conexao);

