CREATE DATABASE gestion_produits;

USE gestion_produits;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT NOT NULL
);



INSERT INTO products (name, price, description) VALUES
('Laptop HP Envy', 1200.99, 'A powerful and sleek laptop with 16GB RAM and 512GB SSD.'),
('Wireless Mouse', 25.49, 'Ergonomic wireless mouse with adjustable DPI.'),
('Bluetooth Headphones', 59.99, 'Comfortable over-ear headphones with deep bass and noise cancellation.'),
('Smartphone Samsung Galaxy S22', 899.99, 'Latest model with 5G, 128GB storage, and triple camera setup.'),
('USB-C Charging Cable', 12.99, 'Durable 1-meter USB-C cable compatible with most devices.'),
('4K Monitor', 350.75, '27-inch 4K UHD monitor with vivid colors and slim bezels.'),
('Gaming Keyboard', 75.20, 'Mechanical keyboard with RGB backlighting and customizable keys.'),
