<?php
class ProductModel {
    private $pdo;
    public function __construct(PDO $pdo) { $this->pdo = $pdo; }

    public function all() {
        $stmt = $this->pdo->query('SELECT name, quantity, price FROM products ORDER BY name');
        return $stmt->fetchAll();
    }

    public function save($name, $quantity, $price) {
        $stmt = $this->pdo->prepare('SELECT id, quantity FROM products WHERE LOWER(name)=LOWER(?)');
        $stmt->execute([$name]);
        $row = $stmt->fetch();
        if ($row) {
            $newQty = $row['quantity'] + $quantity;
            $upd = $this->pdo->prepare('UPDATE products SET quantity=?, price=? WHERE id=?');
            $upd->execute([$newQty, $price, $row['id']]);
        } else {
            $ins = $this->pdo->prepare('INSERT INTO products (name, quantity, price) VALUES (?, ?, ?)');
            $ins->execute([$name, $quantity, $price]);
        }
    }

    public function searchByName($term) {
        $stmt = $this->pdo->prepare('SELECT name, quantity, price FROM products WHERE name LIKE ?');
        $stmt->execute(['%'.$term.'%']);
        return $stmt->fetchAll();
    }

    public function deleteByName($name) {
        $del = $this->pdo->prepare('DELETE FROM products WHERE LOWER(name)=LOWER(?)');
        $del->execute([$name]);
        return $del->rowCount();
    }
}
