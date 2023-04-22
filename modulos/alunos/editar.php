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
  


  $matricula = $_GET['matricula'] ?? '';

  $metodo = $_SERVER['REQUEST_METHOD'];

  if ( $metodo == 'POST') {
    
       include __DIR__ . '/alterar.php';

  }


    $filtro = array_filter($alunos, function($m){
        global $matricula;   
        return $m['matricula'] == $matricula ;
            
    });
    
    foreach ( $filtro as $aluno){
        //var_dump($aluno);
        echo "<div class='px-4'>";
        echo "Tamanho do arquivo: " . filesize($path);
        echo "<br>";
        echo "Matricula encontrada: " . $aluno['nome'] ; 
        echo "</div>";
     }

   
    include __DIR__ .  "/../../templates/alunos/editar.tpl.html";

    include __DIR__ .  "/../../includes/footer.php";