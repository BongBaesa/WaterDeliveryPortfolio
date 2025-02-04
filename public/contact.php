<?php

require __DIR__ . '/../src/bootstrap.php';
?>

<?php view('header', ['title' => 'Contact']); ?>

<section class="contact-page">   
	
<div class="contact-content">
	<h1 class="contact-title">Find us here!</h1>
		<div class="contact-map">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d402.3230288991865!2d120.96856411182951!3d14.769307315547428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3397b20dbdcbee11%3A0x7d4a64c87761077f!2sRy%20De%20Luna%20Water%20Refilling%20Station%2C%20Marilao%2C%20Bulakan!3m2!1d14.769338!2d120.9685624!5e1!3m2!1sen!2sph!4v1670940489736!5m2!1sen!2sph"
				width="600" height="450" class="contact-iframe" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade">
			</iframe>
    	</div>
		<div class="contact-info">
			<p>To achieve our aim to supply affordable drinking water across the community, we are trying our best to deliver as well as provide at all times.</p>
			<h1>Contact us now!</h1>
			<p>For comments or suggestions, please contact us using the form on the right or reach out to us below:</p>
    	</div>
	</div>

	<div class="contact-form">
        <h2 class="form-title">Contact Message</h2>
        
		<form action="submit_form.php" method="POST">
           
		<div class="form-group">
            <label for="name">Your Name:</label>
            <input class="contact-input" type="text" id="name" name="name" placeholder="Enter your name" required ce>
        </div>
         
		<div class="form-group">
            <label for="email">Your Email:</label>
            <input class="contact-input" type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
            
		<div class="form-group">
            <label for="message">Your Message:</label>
            <textarea class="contact-input" id="message" name="message" rows="5" placeholder="Write your message here" required></textarea>
        </div>
            
			<button type="submit" class="contact-submit-btn">Send Message</button>
		</form>
    </div>

</section>


<style>


</style>	

<?php view('footer'); ?>