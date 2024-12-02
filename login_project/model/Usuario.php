<?php
// model/Usuario.php
require_once "config/conexion.php";

class Usuario {
    private $db;

    public function __construct() {
        $this->db = (new Conexion())->conn;
    }

    public function login($username, $password) {
        $query = "SELECT * FROM usuarios WHERE username = :username ";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
            
        return false;

    }
    public function registrar ($username, $password) {
        $hash = password_hash ($password, PASSWORD_BCRYPT); // Encripta la contraseña
        $query = "INSERT INTO usuarios (username, password) VALUES (:username, :password)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $hash);
        return $stmt->execute(); // Inserta en la base de datos
    }
}
?>