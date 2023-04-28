<?php

namespace App\Controllers\Usuarios;
use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class Add extends Controller {

    public function index() {
        print_r("Hola");
    }

    public function guardar() {
        $usuarioModel = new UsuarioModel();
        
        $data = [
            "nombre" => "Bryan Cachimuel",
            "emil" => "bryancachimuel@gmail.com",
            "bibliografica" => "Soy un Ingeniero en Sistemas Computacionales"
        ];

        $usuarioModel->crearUsuario($data);
    }
}
