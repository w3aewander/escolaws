<?php
/**
 * Comandos SQL no PHP.
 */

$json = json_decode(file_get_contents("config.json"));

$conexao = mysqli_connect($json->dbhost, $json->dbuser, $json->dbpass, $json->dbname);

if ( ! $conexao ){
    die('Não foi possível conectar o banco de dados.');
}

//O id do produto - pode vir de um formulário...
$produto_id = 3;

//visualizar os registros de uma determinada tabela
$sql = "SELECT * FROM escolaws.produtos WHERE id = ? ";

//inserindo registro com o parâmetro fornecido.
if ( $result = mysqli_execute_query($conexao, $sql, [$produto_id]) ){

    $row = mysqli_fetch_object($result);
    
    echo "Produto encontrado: {$row->id} - {$row->descricao}";


     
} else {

    echo "Erro ao exibir registro.";
}

mysqli_close($conexao);

