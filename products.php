<?php
session_start();

// Check if the user is logged in
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Guest';

// Sample product data (you would normally fetch this from a database)
$products = [
    ["name" => "Gold Rings", "image" => "images/shop/1.png", "price" => 80],
    ["name" => "Gold Necklaces", "image" => "images/shop/2.png", "price" => 150],
    ["name" => "Gold Bracelets", "image" => "images/shop/5.png", "price" => 175],
    // Add more products as needed...
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products - Sparkle</title>
    <link rel="stylesheet" href="products.css">
</head>
<body>
    <nav class="navbar">
        <!-- Navigation code here -->
    </nav>

    <section class="category-section">
        <div class="product-container">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <img src="images/shop/<?php echo $product['image_path']; ?>" alt="" class="product-img">
                    <p class="product-name"><?php echo $product['name']; ?></p>
                    <p class="product-price">Price: <?php echo $product['price']; ?> Dh</p>
                    <button class="add-to-cart-btn" data-product="<?php echo $product['name']; ?>" data-price="<?php echo $product['price']; ?>">Add to Cart</button>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer class="footer">
        <p class="footer-txt">© 2024 Sparkle. All Rights Reserved.</p>
    </footer>

    <script type="text/javascript" src="script1.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Sparkle</title>
    <link rel="stylesheet" href="products.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <ul class="links-container">
            <li class="link-item"><a href="index1.html" class="link">Home</a></li>
            <li class="link-item"><a href="products.html" class="link active">Products</a></li>
            <li class="link-item"><a href="index1.html" class="link">About</a></li>
            <li class="link-item"><a href="authentification.html" class="link">Authentification</a></li>
        </ul>
        <div class="user-interaction">
            <div class="cart" id="cart-icon">
                <img src="C:\Users\admin\Documents\dev_web test\images\cart.png" class="cart-icon" alt="" height="30" width="30">
                <span class="cart-item-count" id="cart-count">00</span> <!-- Cart count is dynamically updated -->
            </div>
            <div class="user">
                <img src="images/user.png" class="user-icon" alt="" height="30" width="30">
            </div>
        </div>
        
    </nav> 
    <header class="header-section">
        <h1 class="header-heading">Sparkle</h1>
            </header>
    <!-- Product Section -->
    <!-- Product Section with Prices -->
<section class="category-section">
    <div class="product-container">
        <div class="product-card">
            <img src="images/shop/1.png" alt="" class="product-img">
            <p class="product-name">Gold Rings</p>
            <p class="product-price">Price: 80 Dh</p>
            <button class="add-to-cart-btn" data-product="Gold Rings" data-price="80">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="images/shop/2.png" alt="" class="product-img">
            <p class="product-name">Gold Necklaces</p>
            <p class="product-price">Price: 150 Dh</p>
            <button class="add-to-cart-btn" data-product="Gold Necklaces" data-price="150">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="images/shop/3.png" alt="" class="product-img">
            <p class="product-name">Gold Necklaces</p>
            <p class="product-price">Price: 150 Dh</p>
            <button class="add-to-cart-btn" data-product="Gold Necklaces" data-price="150">Add to Cart</button>
        </div>
    </div>
</section>
    <!-- Category 2: Necklaces -->
    <section class="category-section">
        <div class="product-container">
            <div class="product-card">
                <img src="images/shop/4.png" alt="" class="product-img">
                <p class="product-name">Gold Rings</p>
                <p class="product-price">Price: 90 Dh</p>
                <button class="add-to-cart-btn" data-product="Gold Rings" data-price="90">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="images/shop/5.png" alt="" class="product-img">
                <p class="product-name">Gold Bracelets</p>
                <p class="product-price">Price: 175 Dh</p>
                <button class="add-to-cart-btn" data-product="Gold Bracelet" data-price="175">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="images/shop/6.png" alt="" class="product-img">
                <p class="product-name">Gold Rings</p>
                <p class="product-price">Price: 100 Dh</p>
                <button class="add-to-cart-btn"data-product="Gold Rings" data-price="100">Add to Cart</button>
            </div>
        </div>
    </section>

    <!-- Category 3: Rings -->
    <section class="category-section">
        <div class="product-container">
            <div class="product-card">
                <img src="images/shop/7.png" alt="" class="product-img">
                <p class="product-name">Gold Necklaces</p>
                <p class="product-price">Price: 180 Dh</p>
                <button class="add-to-cart-btn"data-product="Gold Necklaces" data-price="180">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="images/shop/8.png" alt="" class="product-img">
                <p class="product-name">Gold Necklaces</p>
                <p class="product-price">Price: 200 Dh</p>
                <button class="add-to-cart-btn"data-product="Gold Necklaces" data-price="200">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="images/shop/9.png" alt="" class="product-img">
                <p class="product-name">Gold Bracelets</p>
                <p class="product-price">Price: 130 Dh</p>
                <button class="add-to-cart-btn"data-product="Gold Bracelets" data-price="130">Add to Cart</button>
            </div>
        </div>
    </section>
    <!-- Cart Modal -->
<div class="cart-modal" id="cart-modal" style="display: none;">
    <div class="cart-modal-content">
        <h2>Your Cart</h2>
        <div id="cart-items"></div> <!-- Cart items will be dynamically displayed here -->
        <p id="cart-total">Total: 0 Dh</p>
        <button id="close-cart-btn">Close</button>
    </div>
</div>

    <!-- Footer -->
    <footer class="footer">
        <p class="footer-txt">© 2024 Sparkle. All Rights Reserved.</p>
    </footer>
    <script type="text/javascript" src="script1.js"></script>
</body>
</html>
