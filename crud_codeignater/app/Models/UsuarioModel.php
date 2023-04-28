<?php
namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model {
    protected $table = 'usuario';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','email','bibliografia'];


    /* Listar los Usuarios Registrados */
    public function listarRegistros(){
        return $this->findAll();
    }

    /* insertar los datos enviados desde el controller a la tabla */
    public function crearUsuario($data){
        return $this->insert($data);
    }

    /* actualizar un registro */
    public function actualizarUsuario($id, $data){
        return $this->update($id, $data);
    }

    /* eliminar un usuario */
    public function eliminarUsuario($id){
        return $this->delete($id);
    }

}