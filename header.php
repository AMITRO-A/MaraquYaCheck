<?php
session_start();
$current_page = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Joti+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="/src/css/style.css" rel="stylesheet">
    <title>Maracuya Confectionery</title>
</head>
<body>
    <header id="main-header">
        <div class="header-container">
            <div class="logo">
                <img src="src/img/logo.png" alt="Логотип Maracuya Confectionery">
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="main" class="menu-item <?php echo $current_page == 'main' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="shop" class="menu-item <?php echo $current_page == 'shop' ? 'active' : ''; ?>">Shop</a></li>
                    <li><a href="about" class="menu-item <?php echo $current_page == 'about' ? 'active' : ''; ?>">About us</a></li>
                    <li><a href="feedback" class="menu-item <?php echo $current_page == 'feedback' ? 'active' : ''; ?>">Feedback</a></li>
                    <li><a href="contacts" class="menu-item <?php echo $current_page == 'contacts' ? 'active' : ''; ?>">Contacts</a></li>
                    <li><a href="cart" class="menu-item <?php echo $current_page == 'cart' ? 'active' : ''; ?>">Cart</a></li>
                    <?php if (isset($_SESSION['username'])): ?>
                        <li>Hi, <?php echo htmlspecialchars($_SESSION['username']); ?>!</li>
                    <?php else: ?>
                        <li><a href="login" class="menu-item <?php echo $current_page == 'login' ? 'active' : ''; ?>">Login</a></li>
                        <li><a href="register" class="menu-item <?php echo $current_page == 'register' ? 'active' : ''; ?>">Register</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>
    <script>
        window.addEventListener('scroll', function() {
            var header = document.getElementById('main-header');
            if (window.scrollY > 0) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
