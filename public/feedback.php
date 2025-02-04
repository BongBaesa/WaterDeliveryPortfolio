<?php

require __DIR__ . '/../src/bootstrap.php';
?>

<?php view('header', ['title' => 'Features']); ?>


<div class="feedback-section">
    <div class="feedback-container">
        <!-- Left Side: Feedback Description -->
        <div class="feedback-left">
            <div class="feedback-header">
                <h1>Customer Feedback</h1>
            </div>

            <div class="feedback-description">
                <p>We value your opinion! Please share your experience with our water delivery service, and help us improve. Your feedback helps us serve you better, and ensures we're meeting your expectations.</p>
                <p class="hidden-description-feedback">
                    At Ry De Luna, we strive to deliver clean, fresh water to your doorstep with utmost reliability. Your feedback is crucial in helping us maintain and enhance our service quality. 
                    Whether it's about the delivery speed, water quality, customer service, or any other aspect, we want to know! Your responses will directly impact how we can serve you better in the future. 
                    Please take a moment to let us know your thoughts and suggestions. 
                    <br><br>
                    We constantly monitor customer satisfaction and make improvements based on your input. By taking a few minutes to complete the form, you help us understand what we're doing right and where we can improve. 
                    Your feedback allows us to keep offering timely, safe, and high-quality water delivery services.
                    <br><br>
                    We also encourage you to share any ideas or features you'd like to see in our services. Whether it’s a suggestion for more flexible delivery times or additional services like water filtration, we’re eager to hear from you. 
                    Thank you for choosing Ry De Luna, and for helping us grow and enhance our service!
                </p>
                <a href="#" class="read-more-link-feedback">Read More</a>
            </div>

            <div class="feedback-form">
                <form action="submit_feedback.php" method="post">
                    <div class="form-group">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" id="name" name="name" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" id="email" name="email" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label for="rating" class="form-label">Rate our Service</label>
                        <select id="rating" name="rating" class="form-select" required>
                            <option value="1">1 - Poor</option>
                            <option value="2">2 - Fair</option>
                            <option value="3">3 - Good</option>
                            <option value="4">4 - Very Good</option>
                            <option value="5">5 - Excellent</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="feedback" class="form-label">Your Feedback</label>
                        <textarea id="feedback" placeholder="Write your message here" name="feedback" class="form-textarea" rows="4" required></textarea>
                    </div>

                    <div class="form-submit">
                        <button type="submit" class="submit-button">Submit Feedback</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Side: Image -->
        <div class="feedback-right">
            <img src="images/water_delivery_vector.png" alt="Feedback" class="feedback-image">
        </div>
    </div>
</div>

<script src="assets/script.js"></script>