<?php
/**
 * Biblioteca de menus do frontend
 * 
 */

 function exibirMenuModulo($menu_modulo = []){
    
    $html = "<div class='d-flex flex-row gap-1'>";

    foreach($menu_modulo as $menu ){
        
        $link = $menu['link'];
        $icone = $menu['icone'];

        $html .= '<div class="list-group-item">';
        $html .= '<a class="btn btn-block btn-danger"  href="$link">$icone</a>';
        $html .= '</div>';
        
    }
    
   $html .= "</div>";

   return $html;
 }

/**
 * Ler arquivo CSV a partir dos parâmetros informados
 * @param $caminho string O caminho do arquivo no sistema
 * @param $dados mixed Os dados que serão escritos no arquivo
 * @return none
 */
function ler_csv($caminho_arquivo) {
    $dados = []; //ou array()
    if (($handle = fopen($caminho_arquivo, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
            $dados[] = $data;
        }
        fclose($handle);
    }
    return $dados;
}

/**
 * Ler arquivo CSV a partir dos parâmetros informados
 * @param $caminho string O caminho do arquivo no sistema
 * @param $dados mixed Os dados que serão escritos no arquivo
 * @return none
 */
function escrever_csv($caminho_arquivo, $dados) {
    if (($handle = fopen($caminho_arquivo, "w")) !== FALSE) {
        foreach ($dados as $linha) {
            fputcsv($handle, $linha, ";");
        }
        fclose($handle);
    }
}

/**
 * Ler arquivo CSV a partir dos parâmetros informados
 * @param $caminho string O caminho do arquivo no sistema
 * @param $dados mixed Os dados que serão escritos no arquivo
 * @return none
 */
function atualizar_csv($caminho_arquivo, $dados) {
    if (($handle = fopen($caminho_arquivo, "w")) !== FALSE) {
        foreach ($dados as $linha) {
            fputcsv($handle, $linha, ";");
        }
        fclose($handle);
    }
}

/**
 * Ler arquivo CSV a partir dos parâmetros informados
 * @param $caminho string O caminho do arquivo no sistema
 * @param $dados mixed Os dados que serão escritos no arquivo
 * @return none
 */
function excluir_csv($caminho_arquivo) {
    unlink($caminho_arquivo);
}