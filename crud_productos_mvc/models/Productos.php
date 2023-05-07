<?php

    class Productos extends Conectar{

        /* función para obtener todos los productos */
        public function get_productos(){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = "SELECT * FROM tm_producto";
            $sql = $conectar->prepare($sql);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

        public function get_producto_por_id($id_producto){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = "SELECT * FROM tm_producto WHERE id_producto=?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$id_producto);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

    }

?>