<?php
/**
 * Script para acesso a tabela curso
 */
require_once __DIR__ . '/../../libs/libws.php';

require __DIR__ . '/../../libs/conexao.php';

 //teste de conexão..
 $sql =  " select id, nome, "; 
 $sql .= " date_format(data_inicio, '%d/%m/%Y') as inicio, "; 
 $sql .= " date_format(data_termino, '%d/%m/%Y') as termino "; 
 $sql .= " from cursos  ";

 // realiza a consulta;
 $stm = mysqli_prepare($conn, $sql);

 // executa o statement
 if ( !$stm->execute()){
    echo "Nao foi possível executar a consulta.";
 }

 // pega o resultado
 $result =  $stm->get_result();


 include __DIR__ . "/../../templates/cursos/listar.tpl.html";

 // fecha o conjunto de resultados liberando a memória
 $result->close();

 // fecha o statement
 $stm->close();

 // fecha a conexão...
 $conn->close();
