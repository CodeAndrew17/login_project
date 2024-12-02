<?php
// Archivo: register_user.php
require_once "controller/UsuarioController.php";
$controller = new UsuarioController();
// Datos del nuevo usuario
$username = "nuevo_usuario";
$password = "clave_secreta";
// Registrar el usuario
if ($controller->registrar ($username, $password)) {
echo "Usuario registrado correctamente.";
} else {
echo "Error al registrar el usuario.";
}
?>