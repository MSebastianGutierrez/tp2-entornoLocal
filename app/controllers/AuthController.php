<?php
session_start();
require_once __DIR__ . '/../models/UserModel.php';

class AuthController {
    
    public function login() {
        $error = '';
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $userModel = new UserModel();
            $user = $userModel->getUser($username, $password);
            
            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                header("Location: index.php?action=dashboard");
                exit();
            } else {
                $error = "Usuario o contraseña incorrectos.";
            }
        }
        
        include __DIR__ . '/../views/login.php';
    }
    
    public function dashboard() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?action=login");
            exit();
        }
        include __DIR__ . '/../views/dashboard.php';
    }
    
    public function logout() {
        session_destroy();
        header("Location: index.php?action=login");
        exit();
    }
}

// Enrutamiento básico
$action = isset($_GET['action']) ? $_GET['action'] : 'login';
$auth = new AuthController();

switch ($action) {
    case 'login':
        $auth->login();
        break;
    case 'dashboard':
        $auth->dashboard();
        break;
    case 'logout':
        $auth->logout();
        break;
    default:
        $auth->login();
        break;
}
?>