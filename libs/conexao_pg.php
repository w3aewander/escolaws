<?php
/**
 * Conexão com o banco de dados PostgreSQL
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0
 * 
 */

 $dbhost = '127.0.0.1';
 $dbport = '5432';
 $dbuser = 'admin';
 $dbpass = '12qwaszx';
 $dbname = 'db_curso';

 $conn = pg_connect("host=$dbhost 
                     port=$dbport 
                     dbname=$dbname 
                     user=$dbuser 
                     password=$dbpass");

if (!$conn) {
    echo "Erro ao conectar com o banco de dados.";
    exit;
} else {
    echo "Banco de dados Postgres conectado com sucesso.";
}

//testar a conexao e leitura de dados.
$id = 1;

//inserir dados...
// $sql_insert = "insert into curso(id,nome,data_inicio,data_termino)
//                values($1,$2,$3,$4)"; 

// $id = 2;
// $nome = 'Desenvolvimento em Python';
// $data_inicio = '2023-06-15';
// $data_termino = '2023-12-22';

// $stm = pg_prepare($conn, 'insert_curso', $sql_insert);

// if (!$stm){
//     echo "Erro ao tentar executar a consulta preparada para inserir dados";
//     pg_close($conn);
//     die();
// }

// pg_execute($conn, 'insert_curso', [$id, $nome, $data_inicio, $data_termino]);


//caso queira utilizar uma consulta preparada
// $sql = 'select * from curso where id = $1';
$sql = 'select * from curso';

//$result = pg_query($conn, $sql);
$stm = pg_prepare($conn, 'listar_cursos', $sql);

if ( !$stm){
    echo  "Erro ao realizar a consulta preparada.";
    pg_close($conn);
    die();
}
//se usar parâmetros...
//$result = pg_execute($conn, 'listar_cursos', [$id]);
$result = pg_execute($conn, 'listar_cursos', []);

echo PHP_EOL;

while ( $row = pg_fetch_object($result)){
    echo $row->nome . PHP_EOL;
}

pg_close($conn);