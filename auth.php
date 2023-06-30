<?php

/**
 * Autenticação de usuários no sistema.
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0
 * 
 */

$metodo = $_SERVER['REQUEST_METHOD'];


if ($metodo == 'POST') {

   $email = $_POST['email'];
   $password = $_POST['password'];

   require_once __DIR__ . '/libs/libauth.php';

   //resposta da autenticação
   $resp = auth($email, $password);

   if (!$resp['success']) {
      header("refresh:0; ./login.php?message={$resp['message']}");
   } else {
      header("refresh:0; ./index.php");      
   }
} else {

   //se o método for GET
   header("refresh:0; ./login.php");
}
