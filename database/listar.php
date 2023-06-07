<?php
/**
 * Script para acesso a tabela curso
 */

 require __DIR__ . "/../libs/conexao.php";

 //teste de conexão..
 $sql =  " select id, nome, "; 
 $sql .= " date_format(data_inicio, '%d/%m/%Y') as inicio, "; 
 $sql .= " date_format(data_termino, '%d/%m/%Y') as termino "; 
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
 
 $table .= "<thead>";
 $table .= "<tr><th style='background-color: gray;' colspan='6'>Tabela de Cursos</th></tr>";
 $table .= "<tr>";
 $table .= "<th>ID</th>";
 $table .= "<th>Curso</th>";
 $table .= "<th>Inicio</th>";
 $table .= "<th>Término</th>";
 $table .= "<th>Carga horária</th>";
 $table .= "<th>Operação</th>";
 $table .= "</tr>";
 $table .= "</thead>";

 $table .= "<tbody>";

    while (  $row = $result->fetch_object() ){
        $table .= "<tr>";
        $table .= "<td>{$row->id}</td>";
        $table .= "<td>{$row->nome}</td>";
        $table .= "<td>{$row->inicio}</td>";
        $table .= "<td>{$row->termino}</td>";
        $table .= "<td></td>";
        $table .= "<td>
                    <a href='editar.php?id={$row->id}'>Editar</a>
                    <a href='excluir.php?id={$row->id}'>Excluir</a>
                    </td>";
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
