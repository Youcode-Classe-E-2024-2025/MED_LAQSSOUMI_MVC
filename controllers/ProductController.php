<?php
require_once 'config/database.php';

function getProducts($conn) {
    $query = "SELECT * FROM products";
    $result = $conn->query($query);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function addProduct($conn, $name, $price, $description) {
    $stmt = $conn->prepare("INSERT INTO products (name, price, description) VALUES (?, ?, ?)");
    $stmt->bind_param("sds", $name, $price, $description);
    $stmt->execute();
}

function deleteProduct($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}
?>
