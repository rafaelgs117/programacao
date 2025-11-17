<?php
class AuthController {
    private $pdo;
    private $USER = 'alice';
    private $PASS = '1234';

    public function __construct(PDO $pdo) { $this->pdo = $pdo; }

    public function login($user, $pass) {
        if ($user === $this->USER && $pass === $this->PASS) {
            $_SESSION['logged'] = true;
            $_SESSION['user'] = $user;
            header('Location: index.php?action=home');
            exit;
        }
        $error = 'Usuário ou senha inválidos.';
        include __DIR__ . '/../views/login.php';
    }

    public function check() {
        return isset($_SESSION['logged']) && $_SESSION['logged'] === true;
    }

    public function logout() {
        session_destroy();
        header('Location: index.php');
        exit;
    }
}
