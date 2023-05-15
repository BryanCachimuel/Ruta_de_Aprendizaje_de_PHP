<?php

    class Productos extends Conectar{

        /* función para obtener todos los productos */
        public function get_productos(){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = "SELECT * FROM tm_producto WHERE estado=1";
            $sql = $conectar->prepare($sql);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

        public function get_producto_por_id($id_producto){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM tm_producto WHERE id_producto=?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$id_producto);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

        public function agregar_producto($nombre, $precio, $cantidad){
            $conectar = parent::conexion();
            parent::set_names();
            $vtotal = $precio * $cantidad;
            $sql = "INSERT INTO tm_producto(nombre,precio,cantidad,precio_total,fecha_creacion,estado) VALUES(?,?,?,?,now(),1)";
            $sql->bindValue(1, $nombre);
            $sql->bindValue(2, $precio);
            $sql->bidValue(3, $cantidad);
            $sql->bindValue(4, $vtotal);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

        /*public function agregar_producto($nombre, $precio, $cantidad){
            $conectar = parent::Conexion();
            parent::set_names();
            $vtotal = $precio * $cantidad;
            $sql = "INSERT INTO tm_producto(nombre,precio,cantidad,precio_total,fecha_creacion,estado) VALUES(?,?,?,$vtotal,now(),1)";
            $sql->bindValue(1, $nombre);
            $sql->bindValue(2, $precio);
            $sql->bidValue(3, $cantidad);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }*/

        public function actualizar_producto($nombre, $precio, $cantidad, $id_producto){
            $conectar = parent::conexion();
            parent::set_names();
            $vtotal = $precion * $cantidad;
            $sql = "UPDATE tm_producto
                    SET nombre=?,
                        precio=?,
                        cantidad=?
                        precio_total=? 
                        fecha_modificacion=now()
                    WHERE id_producto=?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $nombre);
            $sql->bindValue(2, $precio);
            $sql->bidValue(3, $cantidad);
            $sql->bindValue(4, $vtotal);
            $sql->bindValue(5,$id_producto);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

        public function eliminar_producto($id_producto){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "UPDATE tm_producto
                    SET estado=0, 
                        fecha_eliminacion=now()
                    WHERE id_producto=?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$id_producto);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

    }

?>