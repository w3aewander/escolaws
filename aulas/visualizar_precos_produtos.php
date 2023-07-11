<?php
/**
 * Visualizar registros de tabelas relacionadas.
 */

$json = json_decode(file_get_contents("config.json"));

$conexao = mysqli_connect($json->dbhost, $json->dbuser, $json->dbpass, $json->dbname);

if ( ! $conexao ){
    die('Não foi possível conectar o banco de dados.');
}


$sql = "SELECT  p.id, p.descricao, pr.preco 
        FROM produtos p 
        INNER JOIN precos pr 
        on p.id = pr.produto_id";


$tabela = "<table cellpadding='4' cellspacing='3' border='1' rules='cols' width='500'>";
$tabela .= "<thead bgcolor='lightgray'>
                <tr>
                   <th>ID</th>
                   <th>Produto</th>
                   <th >Preço</th>
                </tr>   
            </thead>";

$tabela .= "<tbody>";

if ( $result = mysqli_execute_query($conexao, $sql) ){
 
    while ( $row = mysqli_fetch_object($result)){
        $tabela .= "<tr>
                      <td width='50' align='center'>{$row->id}</td>
                      <td width='*'>{$row->descricao}</td>
                      <td width='100' align='end'>{$row->preco}</td>
                    </tr>";
    }
} else {
    echo "<tr><td colspan='3'>A consulta não retornou dados.</td></tr>";
}

$tabela .= "</tbody>";
$tabela .= "</table>";

echo $tabela;

mysqli_close($conexao);