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
  


  $codigo = $_GET['codigo'] ?? '';

  $metodo = $_SERVE|R['REQUEST_METHOD'];

  if ( $metodo == 'POST') {
    
       include __DIR__ . '/alterar.php';

  }


    $filtro = array_filter($turmas, function($m){
           
        return $m['codigo'] == $_GET['codigo'] ;
            
    });
    
    foreach ( $filtro as $turma){
        //var_dump($aluno);
        echo "<div class='px-4'>";
        echo "Tamanho do arquivo: " . filesize($path);
        echo "<br>";
        echo "Matricula encontrada: " . $turma['nome'] ; 
        echo "</div>";
     }

   
    include __DIR__ .  "/../../templates/turmas/editar.tpl.html";

    include __DIR__ .  "/../../includes/footer.php";