<?php
/**
 * Script para acesso a tabela curso
 */

 require __DIR__ . "/../libs/conexao.php";

 //teste de conexão..
 $sql = "select id, nome, date_format(data_inicio, '%d-%m-%Y') as data_inicio, date_format(data_termino, '%d-%m-%Y') as data_termino "; 
 $sql .= " from curso  "; //where id = ? ";

 // realiza a consulta;
 //$result = mysqli_query($conn, $sql);
 $stm = mysqli_prepare($conn, $sql);
 
 //$id = ';

 //$stm->bind_param('i',  $id );

 // executa o statement
 $stm->execute();

 // pega o resultado
 $result =  $stm->get_result();

 $table = "<table class='table table-bordered table-hover table-striped'>";
 $table .= "<thead><tr>";
 $table .= "<th>ID</th>";
 $table .= "<th>Nome do curso</th>";
 $table .= "<th>Data de inicio</th>";
 $table .= "<th>Data de término</th>";
 $table .= "</tr></thead>";

 $table .= "<tbody>";

while (  $row = $result->fetch_object() ){
     $table .= "<tr>";
     $table .= "<td>{$row->id}</td>";
     $table .= "<td>{$row->nome}</td>";
     $table .= "<td>{$row->data_inicio}</td>";
     $table .= "<td>{$row->data_termino}</td>";
     $table .= "</tr>"; 
 }
 $table .= "</tbody>";
 $table .= "</table>";

 echo $table;


 // fecha o conjunto de resultados liberando a memória
 $result->close();

 // fecha o statement
 $stm->close();

 // fecha a conexão...
 $conn->close();
