<?php
/**
 * Script modelo para conexão com o banco de dados.
 * 
 */

 // Conexão com o banco de dados PostgreSQL
$conn = pgconnect("host= port= dbname= user= password=")
or die('Não foi possível conectar ao banco de dados: '. pglast_error());

// Criação de uma tabela
$result = pgquery("CREATE TABLE ( , , ,...)");
if (!$result) {
echo 'Não foi possível criar a tabela: '. pglast_error();
}

// Inserção de dados na tabela
$result = pgquery("INSERT INTO (, , ,...) VALUES (, , ,...)");
if (!$result) {
echo 'Não foi possível inserir os dados na tabela: '. pglast_error();
}

// Consulta de dados da tabela
$result = pgquery("SELECT , , ,... FROM ");
if (!$result) {
echo 'Não foi possível executar a consulta na tabela: '. pglast_error();
}

// Atualização de dados na tabela
$result = pg_query("UPDATE SET = , = , = ,... WHERE ");
if (!$result) {
echo 'Não foi possível atualizar os dados';
}

// Exclução de dados da tabela
$result = pgquery("DELETE FROM WHERE ");
if (!$result) {
echo 'Não foi possível excluir os dados da tabela: '. pglast_error();
}

// Fecha da conexão com o banco de dados
pg_close($conn);

?>