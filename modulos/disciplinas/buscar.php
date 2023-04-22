<?php
/**
 * Página inicial
 *  
*/
  // ele tenta incluir um arquivo
  //cabelalho: 
  include "header.php";

  // $metodo =  $_SERVER["REQUEST_METHOD"];
  // echo "Método utilizado: " . $metodo;

  //conteúdo do arquivo buscar...
  include "buscar.tpl.html";

//incluindo o arquivo de rodapé...
  include "footer.php";
?>