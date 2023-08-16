<?php

    require_once("./Conexion.php");

    class Crud extends Conexion{

        public function mostrarDatos() {
            try {
                // traigo la conexión por herencia
                $conexion = parent::conectar();
                $coleccion = $conexion->personas;
                $datos = $conexion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

    }

?>