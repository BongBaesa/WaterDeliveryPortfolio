<?php

require __DIR__ . '/../src/bootstrap.php';
?>

<?php view('header', ['title' => 'Features']); ?>

<div class="advertisement-header">
        <h1>Why Choose Ry De Luna Water Delivery?</h1>
    </div>
    
    <div class="advertisement-container">
        <div class="advertisement-section">
            <h2>Reliable Water Delivery Services</h2>
            <p>At Ry De Luna, we understand the importance of clean, fresh, and readily available water. Whether you're at home or at your business, our water delivery services are designed to provide you with the best quality water on time, every time.</p>
        </div>

        <div class="advertisement-section">
            <h3>Our Best Features</h3>
            <div class="features-list">
                <div class="feature-item">
                    <i class="fas fa-truck"></i>
                    <h4>Fast Delivery</h4>
                    <p>Get your water delivered right to your door quickly and efficiently, no delays!</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-tint"></i>
                    <h4>Pure and Clean</h4>
                    <p>Our water is purified and safe, ensuring you drink only the best quality water.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-users"></i>
                    <h4>Customer Satisfaction</h4>
                    <p>We care about our customers. That's why we go the extra mile to meet your needs.</p>
                </div>
            </div>
        </div>

        <div class="cta-section">
            <h2>Order Your Water Today!</h2>
            <p>Experience the convenience of timely and reliable water delivery with Ry De Luna.</p>
            <button onclick="window.location.href='contact.php'">Contact Us Now</button>
        </div>
    </div>