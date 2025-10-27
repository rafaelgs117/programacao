<?php
// includes/auth.php
session_start();
if (!isset($_SESSION['usuario'])) {
    // redirect to login
    header('Location: login.html');
    exit;
}
?>
