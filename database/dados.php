<?php
/**
 * Estrutura de dados para alimentar o nossa página WEB
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 20230308
 * 
 */

  include  __DIR__ . '/functions.php';


 //Caminho do arquivo no sistema operacional
  $alunos =  retornaDados(__DIR__ . "/alunos.csv");
  $cursos =  retornaDados(__DIR__ . "/cursos.csv");
  $disciplinas =  retornaDados(__DIR__ . "/disciplinas.csv");
  $frequencias =  retornaDados(__DIR__ . "/disciplinas.csv");
  