<?php
require_once __DIR__ . '/../models/ProductModel.php';

class ProductController {
    private $model;
    public function __construct(PDO $pdo) { $this->model = new ProductModel($pdo); }

    public function add() {
        $name = trim($_POST['name'] ?? '');
        $qty = intval($_POST['quantity'] ?? 0);
        $price = floatval($_POST['price'] ?? 0);
        if ($name === '' || $qty <= 0 || $price < 0) {
            $msg = 'Preencha os campos corretamente.';
            include __DIR__ . '/../views/add.php';
            return;
        }
        $this->model->save($name, $qty, $price);
        $msg = 'Produto salvo com sucesso.';
        include __DIR__ . '/../views/add.php';
    }

    public function list() {
        $items = $this->model->all();
        include __DIR__ . '/../views/list.php';
    }

    public function search() {
        $term = trim($_POST['term'] ?? '');
        $results = $this->model->searchByName($term);
        include __DIR__ . '/../views/search.php';
    }

    public function delete() {
        $name = trim($_POST['name'] ?? '');
        $deleted = $this->model->deleteByName($name);
        $msg = "Removidos: $deleted";
        include __DIR__ . '/../views/delete.php';
    }
}
