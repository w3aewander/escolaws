<?php
/**
 * Comandos SQL no PHP.
 */

$json = json_decode(file_get_contents("config.json"));

$conexao = mysqli_connect($json->dbhost, $json->dbuser, $json->dbpass, $json->dbname);

if ( ! $conexao ){
    die('Não foi possível conectar o banco de dados.');
}

//visualizar os registros de uma determinada tabela
$sql = "SELECT * FROM escolaws.produtos ";

$tabela = "<table cellpadding='4' cellspacing='4' border='1' rules='both' width='500'>";
$tabela  .= "<thead><tr><th>ID</th><th>Descrição</th><th width='100'>Opções</th></tr></thead>";
$tabela  .= "<tbody>";

//listando os registros.
if ( $result =  mysqli_execute_query($conexao, $sql) ){

    while ( $row = mysqli_fetch_object($result)){
        $tabela .=  "<tr>
                         <td width='50' align='center'>{$row->id}</td>
                         <td>{$row->descricao}</td>
                         <td width='120' align='center'>
                               <button onclick='editarProduto(\"{$row->id}\")'>Editar</button>
                               <button onclick='excluirProduto(\"{$row->id}\")'>Excluir</button>
                        </td>
                    </tr>";
    }
     
} else {

    $tabela .= "<tr><td colpan='3'>Não foi possível inserir o(s) registro(s).</td></tr>";
}


$tabela .= "</tbody>";
$tabela .= "</table>";

echo $tabela;

mysqli_close($conexao);

