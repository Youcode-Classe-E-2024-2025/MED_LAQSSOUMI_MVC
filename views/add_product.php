<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Produit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-4">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4">Ajouter un Produit</h1>
        <form method="POST" action="../index.php?action=add" class="bg-white p-4 rounded shadow-md">
            <input type="text" name="name" placeholder="Nom" class="border p-2 w-full mb-2" required />
            <input type="number" name="price" placeholder="Prix" class="border p-2 w-full mb-2" required />
            <textarea name="description" placeholder="Description" class="border p-2 w-full mb-2" required></textarea>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Ajouter</button>
        </form>
    </div>
</body>
</html>
