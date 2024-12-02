<?php
// model/Usuario.php
require_once "config/conexion.php";
class Usuario {
    private $db;
    public function __construct() {
    $this->db = (new Conexion())->conn;
    }
    public function login($username, $password) {
    $query = "SELECT * FROM usuarios WHERE username = username AND password :password";
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(": password", $password);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>