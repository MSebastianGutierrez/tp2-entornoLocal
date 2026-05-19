<?php
require_once __DIR__ . '/../config/database.php';

class UserModel {
    private $conn;
    
    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }
    
    // Obtener usuario por username y password (sin hash)
    public function getUser($username, $password) {
        $sql = "SELECT id, username FROM usuarios WHERE username = ? AND password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>