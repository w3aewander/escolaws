<?php
/**
 * Script modelo para conexão com o banco de dados.
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0
 */

 try{

 // caminho do arquivo de configuração de acesso ao banco de dados
 $config_path = __DIR__ . "/../config/config.json";

 // carregar dados de conexão
 $config = json_decode(file_get_contents($config_path));

 // Conexão com o banco de dados MySQL usando o MySQLi

 $conn = mysqli_connect( $config->dbhost, 
                         $config->dbuser, 
                         $config->dbpass, 
                         $config->dbname);

 if ( !$conn){
    throw new Exception("Erro ao tentar conectar o banco de dados.");
 }
     
 } catch (Exception $ex){

    die ( $ex->getCode() . ": " . $ex->getMessage());
 }


