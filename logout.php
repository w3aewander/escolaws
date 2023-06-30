<?php
/**
 * Finalizar a sessão atual
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0
 * 
 */
  session_start();

  //destroy a sessão atual...
  session_destroy();

  header("location: {$dir}login.php");