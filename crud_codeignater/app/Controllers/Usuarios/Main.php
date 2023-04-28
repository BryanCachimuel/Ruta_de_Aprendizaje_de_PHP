<?php

namespace App\Controllers\Usuarios;
use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class Main extends Controller {

    public function index() {
        $usuarioModel = new UsuarioModel();
        print_r($usuarioModel->listarRegistros());
    }

    public function delete(){
        $usuarioModel = new UsuarioModel();
        $usuarioModel->eliminarUsuario($id);
    }

}
