<?php

/**
 * Receber dados via formulário e enviá-los para uma base de dados. 
 */

$json = json_decode(file_get_contents('config.json'));

$conexao = mysqli_connect($json->dbhost, $json->dbuser, $json->dbpass, $json->dbname);

if (!$conexao) {

    die("Não foi possível conectar o banco de dados.");
}

//vamos receber os parâmetros id e preco do produto como parâmetro via verbo GET ou POST
//$id = $_GET['id'];
//$preco = $_GET['preco'];
//$id = $_POSt['id'];
//$preco = $_POST['preco'];

//a superglobal $_REQUEST nos permite obter os parâmetros tanto via GET quanto via POST.
$id = $_REQUEST['id'];
$preco = $_REQUEST['preco'];

//vamos construir a SQL
$sql = "INSERT INTO precos(produto_id, preco) values ( ?, ? )";

//vamos executar a consulta
if ( mysqli_execute_query($conexao, $sql, [$id, $preco]) ){
    $affecteds = mysqli_affected_rows($conexao);
    echo "registro(s) inserido(s): $affecteds";
} else {
    echo "Não foi possível inserir o registro.";
}

mysqli_close($conexao);
