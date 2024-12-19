<?php
require_once './config/database.php';
require_once './controllers/productController.php';

$action = $_GET['action'] ?? 'index';

if ($action === 'index') {
    include './views/products.php';
} elseif ($action === 'add' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    addProduct($conn, $_POST['name'], $_POST['price'], $_POST['description']);
    header("Location: index.php");
} elseif ($action === 'delete' && isset($_GET['id'])) {
    deleteProduct($conn, $_GET['id']);
    header("Location: index.php");
}
?>
