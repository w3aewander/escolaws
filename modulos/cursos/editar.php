<?php
/**
 * Página inicial
 *  
*/
  // ele tenta incluir um arquivo
  //cabelalho: 

  include __DIR__ . "/../../config/config.inc.php";
  
  include __DIR__ .  "/../../includes/header.php";

  include __DIR__ .  "/../../database/dados.php";

  $metodo = $_SERVER['REQUEST_METHOD'];
  
  $codigo = $_REQUEST['codigo'] ?? '';

  if ( $metodo == 'POST') {
  
    include __DIR__ . '/alterar.php';

  }
  
  if ( $codigo ){
    $filtro = array_filter($cursos, function($m) use($codigo){
           
        return $m[0] == $codigo ;
            
    });
    
    foreach ( $filtro as $curso){}

   }
    
    
    include __DIR__ .  "/../../templates/cursos/editar.tpl.html";

    include __DIR__ .  "/../../includes/footer.php";


