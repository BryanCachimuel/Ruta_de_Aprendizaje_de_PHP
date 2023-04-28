<?php
namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model {
    protected $table = 'usuario';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','email','bibliografia'];

    /* insertar los datos enviados desde el controller a la tabla */
    public function crearUsuario($data){
        return $this->insert($data);
    }

}