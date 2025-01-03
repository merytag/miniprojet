<?php
session_start();

// Check if the user is logged in
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Guest';

// Sample data for the top-selling products (you would likely fetch this from a database)
$top_selling_products = [
    ["name" => "Gold Bracelet", "image" => "images/shop/11.png"],
    ["name" => "Gold Rings", "image" => "images/shop/4.png"],
    ["name" => "Gold Necklaces", "image" => "images/shop/7.png"],
];

// Featured products (similarly, fetch these from the database)
$featured_products = [
    "images/shop/1.png",
    "images/shop/2.png",
    "images/shop/5.png",
    "images/shop/18.png",
    "images/shop/image1.png"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparkle</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <nav class="navbar">
    <ul class="links-container">
        <li class="link-item"><a href="#" class="link active">Home</a></li>
        <li class="link-item"><a href="products.html" class="link">Products</a></li>
        <li class="link-item"><a href="#about-sec" class="link">About</a></li>
        <li class="link-item"><a href="authentification.html" class="link">Authentication</a></li>

    </ul>
<div class="user-interaction">
<div class="cart">
    <img src="./images/cart.png" class="cart-icon" alt="" height="30" width="30">
    <span class="cart-item-count">00</span>
</div>
<div class="user">
    <img src="./images/user.png" class="user-icon" alt="" height="30" width="30">
</div>
</div>
    </nav>
    <header class="header-section">
<h1 class="header-heading">Sparkle</h1>
    </header>
    <!--top-selling -->
    <section class="top-selling" id="home-sec">
<h1 class="section-title">Top-Selling Products</h1>
<div class="product-container">
    <div class="product-card">
        <img src="./images/shop/11.png" alt="" class="product-img">
          <p class="product-name">Gold Bracelet</p>
    </div>
    <div class="product-card">
        <img src="./images/shop/4.png" alt="" class="product-img">
          <p class="product-name">Gold Rings</p>
    </div>
    <div class="product-card">
        <img src="./images/shop/7.png" alt="" class="product-img">
          <p class="product-name">Gold Necklaces</p>
    </div>
 </div>
    </section>
    <!--mid section-->
    <section class="cllg-sec" id="featured-products">
        <h2>Our Featured Products</h2>
        <div class="cllg-cont">
            <div class="cllg-item">
                <img src="./images/shop/1.png" alt="">
            </div>
            <div class="cllg-item">
                <img src="./images/shop/2.png" alt="">
            </div>
            <div class="cllg-item">
                <img src="./images/shop/5.png" alt="">
            </div>
            <div class="cllg-item">
                <img src="./images/shop/18.png"alt="">
            </div>
            <div class="cllg-item">
                <img src="./images/shop/image1.png" alt="">
            </div>
        </div>
    </section>
    <!--review-->
    <section class="testimonials">
    <h2>What Our Customers Are Saying</h2>
    <div class="testimonial-item">
        <p>"Sparkle has completely transformed my shopping experience! The website is easy to navigate, and the customer service is fantastic!"</p>
        <div class="customer-info">
            <img src="images/customer1.jpg" alt="Customer 1" class="customer-photo">
            <div class="customer-details">
                <strong>Jane Doe</strong>
            </div>
        </div>
    </div>

    <div class="testimonial-item">
        <p>"I love how fast my orders are processed. Everything is delivered on time, and the products are always high quality!"</p>
        <div class="customer-info">
            <img src="images/customer2.jpg" alt="Customer 2" class="customer-photo">
            <div class="customer-details">
                <strong>Jenna Smith</strong>
            </div>
        </div>
    </div>

    <div class="testimonial-item">
        <p>"I’ve been a loyal customer for years. Sparkle’s attention to detail and excellent customer service make me come back every time!"</p>
        <div class="customer-info">
            <img src="images/customer3.jpg" alt="Customer 3" class="customer-photo">
            <div class="customer-details">
                <strong>Emily Clark</strong>
            </div>
        </div>
    </div>
</section>
    <!--end sec-->
    <section class="end-sec" id="about-sec">
        <h1 class="end-title">Bring Sparkle to Your Life</h1>
        <p class="end-info">Join us on this sparkling journey and discover the perfect pieces to elevate your lifestyle. Thank you for choosing Sparkle, where every purchase adds a little more shine to your day!</p>
        <img src="./images/hero_background.png" alt="" class="end-image">
    </section>  
    <!--footer-->
    <footer class="footer">
        <p class="footer-txt">© 2024 Sparkle. All Rights Reserved.</p>
    </footer>      
</body>
</html>
