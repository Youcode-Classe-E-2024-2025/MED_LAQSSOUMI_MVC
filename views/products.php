<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-4">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4">Gestion des Produits</h1>
        <a href="views/add_product.php" class="bg-blue-500 text-white px-4 py-2 rounded">Ajouter un produit</a>
        <div class="mt-4">
            <table class="table-auto w-full bg-white shadow-md rounded">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Nom</th>
                        <th class="px-4 py-2">Prix</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once 'controllers/productController.php';
                    $products = getProducts($conn);
                    foreach ($products as $product): ?>
                        <tr>
                            <td class="border px-4 py-2"><?= htmlspecialchars($product['name']) ?></td>
                            <td class="border px-4 py-2"><?= htmlspecialchars($product['price']) ?> €</td>
                            <td class="border px-4 py-2"><?= htmlspecialchars($product['description']) ?></td>
                            <td class="border px-4 py-2">
                                <a href="index.php?action=delete&id=<?= $product['id'] ?>" class="text-red-500">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
