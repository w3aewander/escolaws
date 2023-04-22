<?php
/**
 * Página inicial
 *  
*/
  // ele tenta incluir um arquivo
  //cabelalho: 
 
  include __DIR__ . "/config/config.inc.php";
  
  include __DIR__ .  "/includes/header.php";

  //incluindo o arquivo home.. arquivo inicial
  include  __DIR__ . "/templates/home.tpl.html";
  

  $numeroComDoisDigitos = function(int $numero){
      if ( $numero <= 9 ){
          return "0".$numero;
      }  
     return $numero; 
  };

  echo "<strong>Exemplo da função anônima: " . $numeroComDoisDigitos(9) . "</strong><br>";

  //incluindo o arquivo de rodapé...
  include __DIR__ . "/includes/footer.php";
