<?php
class Product {
    private $db;

    public function __construct($host, $username, $password, $dbname) {
        $this->db = new mysqli($host, $username, $password, $dbname);

        if ($this->db->connect_error) {
            die("Erreur de connexion : " . $this->db->connect_error);
        }
    }

    public function getProducts() {
        $query = "SELECT * FROM products";
        $result = $this->db->query($query);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addProduct($name, $price, $description) {
        $stmt = $this->db->prepare("INSERT INTO products (name, price, description) VALUES (?, ?, ?)");
        $stmt->bind_param("sds", $name, $price, $description);
        $stmt->execute();
    }

    public function deleteProduct($id) {
        $stmt = $this->db->prepare("DELETE FROM products WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
?>
