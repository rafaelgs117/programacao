<?php
// Front controller
session_start();
require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/controllers/AuthController.php';
require_once __DIR__ . '/controllers/ProductController.php';

$action = $_GET['action'] ?? 'home';

$auth = new AuthController($pdo);
if (!($auth->check())) {
    if ($action === 'login' && $_SERVER['REQUEST_METHOD']==='POST') {
        $auth->login($_POST['user'] ?? '', $_POST['pass'] ?? '');
    } else {
        include __DIR__ . '/views/login.php';
    }
    exit;
}

$pc = new ProductController($pdo);
switch ($action) {
    case 'add': if ($_SERVER['REQUEST_METHOD']==='POST') $pc->add(); else include __DIR__.'/views/add.php'; break;
    case 'list': $pc->list(); break;
    case 'search': if ($_SERVER['REQUEST_METHOD']==='POST') $pc->search(); else include __DIR__.'/views/search.php'; break;
    case 'delete': if ($_SERVER['REQUEST_METHOD']==='POST') $pc->delete(); else include __DIR__.'/views/delete.php'; break;
    case 'logout': $auth->logout(); break;
    default: include __DIR__.'/views/home.php'; break;
}
