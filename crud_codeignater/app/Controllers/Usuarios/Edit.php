<?php

namespace App\Controllers\Usuarios;
use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class Edit extends Controller {

    public function index() {
        print_r("Hola");
    }

    public function actualizar($id) {
        $usuarioModel = new UsuarioModel();
        
        $data = [
            "nombre" => "Lennin Loyo",
            "emil" => "lenninloyo@gmail.com",
            "bibliografica" => "Soy un Ingeniero en Sistemas"
        ];

        $usuarioModel->actualizarUsuario($id, $data);
    }
}
