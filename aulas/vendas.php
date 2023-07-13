<?php
/**
 * registrar vendas
 */

 $json = json_decode( file_get_contents('config.json') );

 $conexao = mysqli_connect($json->dbhost, $json->dbuser, $json->dbpass, $json->dbname);

 if (!$conexao) {
    die('Falha na conexão com o banco de dados: '. mysqli_connect_error());
 }

 //parametros serão recebidos via GET ou POST
 $produto_id = $_REQUEST['produto_id'];
 $qtde = $_REQUEST['qtde'];

 $sql = "INSERT INTO escolaws.vendas(produto_id, qtde) VALUES (?,?)";

 if ( mysqli_execute_query($conexao, $sql, [$produto_id, $qtde]) ){
     echo "Venda de {$qtde} unidades do produto {$produto_id} realizada  com sucesso.";
 } else {
     echo "Falha ao realizar a venda.";
 }

 mysqli_close($conexao);