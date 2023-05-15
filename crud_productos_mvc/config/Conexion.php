<?php
    class Conectar{
        protected $base_datos;

        protected function conexion(){
            try {
                $conectar = $this->base_datos = new PDO("mysql:local=localhost;dbname=crud_productos_mvc","root","");
                return $conectar; 
            } catch (Exception $e) {
                print "¡Error en la Conexión hacia la base de datos: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        /* función para reconocer las ñ y las tildes */
        public function set_names(){
            return $this->base_datos->query("SET NAMES 'utf8'");
        }
    }
?>