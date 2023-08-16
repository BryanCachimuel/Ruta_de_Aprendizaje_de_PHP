<?php

require_once("C://xampp/htdocs/Ejercicios_PHP/crud_php_mongodb/vendor/autoload.php");

    class Conexion {

        public function conectar(){
            try {
                $servidor = "127.0.0.1";
            $usuario = "mongoadmin";
            $password = "123456";
            $baseDatos = "crud_php_mongodb";
            $puerto = "27017";

            $cadenaConexion = "mongodb://" .
                              $usuario . ":" .
                              $password . "@" .
                              $servidor . ":" .
                              $puerto . "/" .
                              $baseDatos;
            
            $cliente = new MongoDB\Client($cadenaConexion);
            return $cliente->selectDatabase($baseDatos);
            
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }
    /*
    Probar que exista la conexión hacia la base de datos
    $objeto = new Conexion();
    var_dump($objeto->conectar());
    */
?>
