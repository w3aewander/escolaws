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
//$pesquisa = "Arroz%";
//$pesquisa = "%sapucaí%";
$pesquisa = "%Ti%";

//Pesquisar registros cujo a descrição contenha a string informada ou no inicio, ou no fim ou no meio.
$sql = "SELECT * FROM escolaws.produtos WHERE descricao like ? ";

//inserindo registro com o parâmetro fornecido.
if ( $result = mysqli_execute_query($conexao, $sql, [$pesquisa]) ){

    while ( $row = mysqli_fetch_object($result) ){
        echo "Produto encontrado: {$row->id} - {$row->descricao} " . PHP_EOL;
    }
     
} else {

    echo "Erro ao exibir registro.";
}

mysqli_close($conexao);

