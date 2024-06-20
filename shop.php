<?php
session_start();

// Инициализируем корзину, если она не инициализирована
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Обработка добавления товара в корзину
$addedToCart = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product'])) {
    $product = $_POST['product'];
    if (!isset($_SESSION['cart'][$product['id']])) {
        $_SESSION['cart'][$product['id']] = $product;
        $_SESSION['cart'][$product['id']]['quantity'] = 1;
    } else {
        $_SESSION['cart'][$product['id']]['quantity']++;
    }
    $addedToCart = true;
}
?>

<?php include('header.php'); ?>

<?php if ($addedToCart): ?>
    <div id="notification" class="fixed top-10 right-10 bg-green-500 text-white px-4 py-2 rounded shadow-lg">
        Product successfully added to cart!
    </div>
<?php endif; ?>

<div class="shop-banner">
    <div class="shop-logo-section">
       
    </div>
</div>

<!-- Секция с карточками товаров -->
<section class="shop-products-section">
    <div class="shop-product-card">
        <img src="/src/img/shop/1.png" alt="Product 1" class="shop-product-image">
        <h3 class="shop-product-title">Blueberry Waves Cake</h3>
        <p class="shop-product-description">Indulge in the delicate delight of our Blueberry Wave Cake, a symphony of flavors that will transport your taste buds to a realm of pure satisfaction. Moist and tender, our golden cake encases a luscious blueberry filling, bursting with the sweet-tart essence of freshly picked blueberries. Each bite is a harmonious balance of soft cake crumb and juicy blueberry goodness, creating an unforgettable culinary experience that embodies the essence of summer. Elevate your dessert table with the irresistible allure of our Blueberry Wave Cake, where every slice promises a taste of pure fruity paradise.</p>
        <form action="shop.php" method="POST">
            <input type="hidden" name="product[id]" value="1">
            <input type="hidden" name="product[name]" value="Blueberry Waves Cake">
            <input type="hidden" name="product[price]" value="10.00">
            <button type="submit" class="shop-add-to-cart-button">Add to Cart</button>
        </form>
    </div>

    <div class="shop-product-card">
        <img src="/src/img/shop/2.png" alt="Product 2" class="shop-product-image">
        <h3 class="shop-product-title">Princess’s Dream Cake</h3>
        <p class="shop-product-description">Step into a fairy tale of flavor with our enchanting creation, the Princess's Dream Cake. Delicately crafted with layers of moist vanilla sponge, it unveils a hidden treasure of luscious strawberry filling, reminiscent of a garden kissed by morning dew. But that's not all – crowned with a sprinkle of rich, velvety chocolate, this cake becomes a decadent indulgence fit for royalty. Each bite is a journey through a magical kingdom of taste, where the sweetness of strawberries meets the allure of dark chocolate in perfect harmony. Treat yourself to a slice of pure fantasy with our Princess's Dream Cake – because every bite is a moment of royal bliss.</p>
        <form action="shop.php" method="POST">
            <input type="hidden" name="product[id]" value="2">
            <input type="hidden" name="product[name]" value="Princess’s Dream Cake">
            <input type="hidden" name="product[price]" value="15.00">
            <button type="submit" class="shop-add-to-cart-button">Add to Cart</button>
        </form>
    </div>
</section>

<button onclick="shopTopFunction()" id="shop-myBtn" title="Go to top">⬆️</button>

<?php include('footer.php'); ?>

<script>
let shopMybutton = document.getElementById("shop-myBtn");

window.onscroll = function() {shopScrollFunction()};

function shopScrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    shopMybutton.style.display = "block";
  } else {
    shopMybutton.style.display = "none";
  }
}

function shopTopFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0; 
}

// Показать уведомление при успешном добавлении товара в корзину
document.addEventListener('DOMContentLoaded', function() {
    const notification = document.getElementById('notification');
    if (notification) {
        setTimeout(() => {
            notification.classList.add('hidden');
        }, 3000);
    }
});
</script>
<script src="https://cdn.tailwindcss.com"></script>
