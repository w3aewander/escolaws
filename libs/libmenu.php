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