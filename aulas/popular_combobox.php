<?php

/**
 * Popular uma lista de valores em um combobox (select no html)
 * a partir do resultado de uma consulta SQL 
 * no PHP
 * 
 */

$json = json_decode(file_get_contents('config.json'));

$conexao = mysqli_connect($json->dbhost, $json->dbuser, $json->dbpass, $json->dbname);

if (!$conexao) {

    die("Não foi possível conectar o banco de dados.");
}

//vamos construir a consulta 
$sql = "SELECT `id`, `descricao` FROM escolaws.produtos";

//declarar a variável que inicializa um combo.

$combobox = "<select name='cmb_produtos'>";

//vamos executar a consulta
if ($result = mysqli_execute_query($conexao, $sql)) {

    $combobox .= "<option selected value=''>Escolha um produto...</option>";

    while ($row = mysqli_fetch_object($result)) {
        $combobox .= "<option value='{$row->id}'>{$row->descricao}</option>";
    }
} else {
    echo "<option value=''>Consulta não retornou dados</option>";
}

$combobox .= "</select>";

echo $combobox;

//Fechar a conexao.
mysqli_close($conexao);
