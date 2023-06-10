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
 $stm = mysqli_prepare($conn, $sql);

 // executa o statement
 if ( !$stm->execute()){
    echo "Nao foi possível executar a consulta.";
 }

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
                    <a class='btn btn-info' href='editar.php?id={$row->id}'><i class='fa fa-edit'></i> Editar</a>
                    <a class='btn btn-danger' href='excluir.php?id={$row->id}'><div class='fa fa-trash'></div>Excluir</a>
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
