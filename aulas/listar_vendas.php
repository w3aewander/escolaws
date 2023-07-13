<?php
/**
 * listar vendas
 */

 $json = json_decode( file_get_contents('config.json') );

 $conexao = mysqli_connect($json->dbhost, $json->dbuser, $json->dbpass, $json->dbname);

 if (!$conexao) {
    die('Falha na conexão com o banco de dados: '. mysqli_connect_error());
 }

 $sql = " 
            SELECT v.id, v.produto_id, p.descricao, pr.preco, v.qtde, (v.qtde * pr.preco) as total  
            FROM vendas v
            INNER JOIN produtos p
            ON v.produto_id = p.id
            INNER JOIN precos pr
            ON p.id = pr.produto_id
       ";

 $result = mysqli_execute_query($conexao, $sql);

 if (!$result) {
    die('Falha na consulta: '. mysqli_error($conexao));
 }

 $total_pagar = 0.0;

 $table = "<table cellpadding='4' cellspacing='4' rules='rows' width='600'>";
 $table .= "<thead><tr><th>ID</th><td>Cód.Produto</th><th>Produto</th><th>Preco</th><th>Qtde</th><th>Total</th></tr></thead>";
 $table .= "<tbody>";


 //percorrendo o conjunto de resultados.
 while ( $row = mysqli_fetch_object($result)){

    $table .=  "<tr>
            <td>{$row->id}</td>
            <td>{$row->produto_id}</td>
            <td>{$row->descricao}</td>
            <td>{$row->preco}</td>
            <td>{$row->qtde}</td>
            <td align='end'>" . number_format($row->total,2,',','.') . "</td>
        </tr>";

    $total_pagar += $row->total;
 }

 $table .= "</tbody>";

 $table .= "<tfoot>
               <tr>
                  <th align='end' colspan='5'>Total a pagar:</th>
                  <td align='end'>" . number_format($total_pagar,2, ',','.') . "</td>
               </tr>
           </tfoot>";

 $table .= "</table>";

 echo $table;

 mysqli_close($conexao);
