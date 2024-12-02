<?php
// controller/UsuarioController.php
require_once "model/Usuario.php";

class UsuarioController {
    private $usuarioModel;

    public function __construct() {
    $this->usuarioModel = new Usuario();
    }

    public function login($username, $password) {
        return $this->usuarioModel->login($username, $password);
    }
    
    public function registrar($username,$password) {
        return $this->usuarioModel->registrar($username,$password);
    }
}
?>