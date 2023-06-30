<?php

/**
 * Biblioteca de funções para o sistema modular didático
 * @author Wanderlei Silva  <wander.silva@gmail.com>
 * @version 1.0
 * 
 */

define('strict_types', 1);

session_start();

require __DIR__ . '/conexao.php';

function auth(String $email, String $password): array
{

    global $conn;

    try {
        $sql = "select * from usuarios where email = ?";
        $result = mysqli_execute_query($conn, $sql, [$email]);

        if (!mysqli_num_rows($result)) {
            throw new Exception("Email não cadastrado na base de dados.");
        } else {

            $res = mysqli_fetch_object($result);

            if (!password_verify($password, $res->password)) {
                throw new Exception("Acesso nao autorizado. Usuario e/ou senha incorretos.");
            } else {

                $_SESSION['AUTHENTICATED'] = 1;
                $_SESSION['usuario'] = $res;

                $msg = "Usuario autenticado com sucesso.";

                return ['success' => true, 'message' => $msg];
            }
        }
    } catch (Exception $ex) {

        return ['success' => false, 'message' => $ex->getMessage()];
    }
}
