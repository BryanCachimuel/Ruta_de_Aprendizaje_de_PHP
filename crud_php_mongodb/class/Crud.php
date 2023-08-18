<?php

    class Crud extends Conexion{

        public function mostrarDatos() {
            try {
                // traigo la conexión por herencia
                $conexion = parent::conectar();
                $coleccion = $conexion->personas;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function obtenerDocumento($id) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->personas;
                $datos = $coleccion->findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                     );
                return $datos;
            } catch (\Throwable $th) {
                $th->getMessage();
            }
        }

        public function insertarDatos($datos) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->personas;
                $resultado = $coleccion->insertOne($datos);
                return $resultado;  
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function eliminarDato($id) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->personas;
                $respuesta = $coleccion->deleteOne(
                                            array(
                                                "_id" => new MongoDB\BSON\ObjectId($id)
                                            )
                                        ); 
                return $respuesta;
            } catch (\Throwable $th) {
                $th->getMessage();
            }
        }

        public function actualizar($id, $datos) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->personas;
                $respuesta = $coleccion->updateOne(
                                ['_id' => new MongoDB\BSON\ObjectId($id)],
                                [
                                    '$set' => $datos
                                ]
                            );
                return $respuesta;
            } catch (\Throwable $th) {
                $th->getMessage();
            }
        }

        public function mensajesCrud($mensaje) {
            $msg = '';
            if($mensaje == 'insert'){
                $msg = 'swal("Excelente!", "Agregado con exito!", "success")';
            }else if($mensaje == 'update'){
                $msg = 'swal("Excelente!", "Actualizado con exito!", "info")';
            }else if($mensaje == 'delete'){
                $msg = 'swal("Excelente!", "Eliminado con exito!", "warning")';
            }

            return $msg;
        }
    }

?>