<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

<?php
session_start();

// Обработка удаления товара из корзины
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remove'])) {
    $productId = $_POST['remove'];
    if (isset($_SESSION['cart'][$productId])) {
        unset($_SESSION['cart'][$productId]);
    }
}
?>

<?php include('header.php'); ?>

<div class="flex-grow flex items-center justify-center">
    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg w-full max-w-5xl">
        <h1 class="text-3xl font-bold mb-4 text-center">Your Shopping Cart</h1>
        <?php if (empty($_SESSION['cart'])): ?>
            <p class="text-gray-700 text-center">Your cart is empty.</p>
        <?php else: ?>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 text-left">Product</th>
                        <th class="py-2 text-left">Price</th>
                        <th class="py-2 text-left">Quantity</th>
                        <th class="py-2 text-left">Total</th>
                        <th class="py-2 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $product): ?>
                        <tr>
                            <td class="border px-4 py-2"><?= htmlspecialchars($product['name']) ?></td>
                            <td class="border px-4 py-2">$<?= htmlspecialchars(number_format($product['price'], 2)) ?></td>
                            <td class="border px-4 py-2"><?= htmlspecialchars($product['quantity']) ?></td>
                            <td class="border px-4 py-2">$<?= htmlspecialchars(number_format($product['price'] * $product['quantity'], 2)) ?></td>
                            <td class="border px-4 py-2">
                                <form action="cart.php" method="POST">
                                    <button type="submit" name="remove" value="<?= htmlspecialchars($product['id']) ?>" class="bg-red-500 text-white px-4 py-2 rounded">Remove</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="mt-4 text-right">
                <strong class="text-xl">Total: $<?= htmlspecialchars(number_format(array_sum(array_map(function($product) {
                    return $product['price'] * $product['quantity'];
                }, $_SESSION['cart'])), 2)) ?></strong>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include('footer.php'); ?>

</body>
</html>
