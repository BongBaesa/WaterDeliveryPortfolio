<?php

require __DIR__ . '/../src/bootstrap.php';
?>

<?php view('header', ['title' => 'Order']); ?>


<div class="slideshow-container">
    <div class="home-content">
        <div class="image">
            <img src="images/home-content.png" alt="Water Delivery Service" class="slide-image">
        </div>
        <div class="info">
        <h2>RY de LUNA<br><span>WATER REFILLING STATION</span></h2>
            <p><b>RY de Luna Water</b> is dedicated to providing all of its customers with a consistent supply of high-quality drinking water that is safe, clean, and affordable. Since our inception in <b>December 2019</b>, we've been serving the local community with reliable and fresh water that meets national safety standards. Our commitment to quality and customer satisfaction is at the heart of everything we do.<br>
            <br>Whether you need water for your home, business, or special events, RY de Luna Water ensures you get the best water possible. Our services include same-day delivery, bulk delivery, eco-friendly options, and customizable bottle sizes, all aimed at making hydration easier for you.</p>
            <a href="login.php" class="order-btn">ORDER NOW</a>
        </div>
        </div>

    <div class="home2-content">
        <div class="image">
            <img src="images/home2-content.png" alt="Eco-friendly Water Delivery" class="slide-image">
        </div>
        <div class="info">
        <h2>WATER YOU CAN TRUST,<br><span>SERVICE YOU CAN COUNT ON</span></h2>
            <p><b>RY de Luna Water</b> provides a diverse range of water products and services to meet the needs of our local community. Whether you're looking for water for personal consumption or large-scale events, we've got you covered. Our water is filtered through state-of-the-art technology to ensure it's free from contaminants and perfect for drinking, cooking, and more.<br>
            <br>Our commitment extends beyond just clean water; we strive to offer excellent customer service, ensuring timely deliveries, reliable order scheduling, and eco-friendly packaging options that align with our sustainable vision. We care about your health and the environment, which is why we go the extra mile to provide high-quality, environmentally-conscious water solutions.</p>
        </div>
    </div>
</div>

<script src="assets/script.js"></script>

<?php view('footer') ?>

