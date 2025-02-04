<?php
require __DIR__ . '/../src/bootstrap.php';

?>

<?php view('dashboard', ['title' => 'Payment']) ?>

<!-- Payment Process Section -->
<section class="payment-section">
    <h2 class="section-title">Payment Process</h2>
    <form class="payment-form">
        <!-- Cardholder Information -->
        <label for="cardholder-name">Cardholder Name:</label>
        <input type="text" id="cardholder-name" name="cardholder-name" class="input-field" placeholder="Enter cardholder's name" required>

        <label for="card-number">Card Number:</label>
        <input type="text" id="card-number" name="card-number" class="input-field" placeholder="Enter card number" required>

        <label for="expiry-date">Expiry Date (MM/YY):</label>
        <input type="text" id="expiry-date" name="expiry-date" class="input-field" placeholder="MM/YY" required>

        <label for="cvv-code">CVV:</label>
        <input type="text" id="cvv-code" name="cvv-code" class="input-field" placeholder="Enter CVV" required>

        <!-- Billing Address -->
        <h3>Billing Address</h3>
        <label for="billing-address">Billing Address:</label>
        <input type="text" id="billing-address" name="billing-address" class="input-field" placeholder="Enter billing address" required>

        <label for="billing-city">City:</label>
        <input type="text" id="billing-city" name="billing-city" class="input-field" placeholder="Enter city" required>

        <label for="billing-postal-code">Postal Code:</label>
        <input type="text" id="billing-postal-code" name="billing-postal-code" class="input-field" placeholder="Enter postal code" required>

        <label for="billing-country">Country:</label>
        <input type="text" id="billing-country" name="billing-country" class="input-field" placeholder="Enter country" required>

        <!-- Payment Method Options -->
        <label for="payment-method">Payment Method:</label>
        <select id="payment-method" name="payment-method" class="select-field" required>
            <option value="credit-card">Credit Card</option>
            <option value="paypal">PayPal</option>
            <option value="bank-transfer">Bank Transfer</option>
        </select>

        <!-- Option to Save Payment Info for Future Use -->
        <label for="save-payment-info">
            <input type="checkbox" id="save-payment-info" name="save-payment-info" class="checkbox-field">
            Save this payment information for future use.
        </label>

        <!-- Terms and Conditions -->
        <label for="terms-and-conditions">
            <input type="checkbox" id="terms-and-conditions" name="terms-and-conditions" class="checkbox-field" required>
            I agree to the <a href="#">Terms and Conditions</a>.
        </label>

        <button type="submit" class="submit-btn">Proceed to Payment</button>
    </form>
</section>

<!-- <style>
    /* Main container styling */
.form-container {
    background-color: rgba(0, 123, 255, 0.1); /* Transparent blue */
    padding: 2rem;
    border-radius: 10px;
    width: 100%;
    max-width: 600px;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
}

/* Heading styling */
.main-title {
    text-align: center;
    color: #007bff;
    margin-bottom: 1.5rem;
}

/* Section title styling */
.section-title {
    color: #007bff;
    margin-bottom: 1rem;
    font-size: 1.2rem;
}

/* Form styling */
.payment-form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

label {
    font-weight: bold;
    color: #333;
    font-size: 0.9rem;
}

/* Input and Select fields */
.input-field, .select-field {
    padding: 0.75rem;
    font-size: 1rem;
    border-radius: 5px;
    border: 1px solid #007bff;
    outline: none;
}

.input-field:focus, .select-field:focus {
    border-color: #0056b3;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

/* Checkbox styling */
.checkbox-field {
    margin-right: 0.5rem;
}

/* Billing Address Section Styling */
.payment-form h3 {
    font-size: 1rem;
    color: #333;
    margin-bottom: 0.5rem;
}

.payment-form .input-field, .payment-form .select-field {
    margin-bottom: 1rem;
}

/* Submit Button Styling */
.submit-btn {
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    padding: 1rem;
    font-size: 1.1rem;
    border-radius: 5px;
}

.submit-btn:hover {
    background-color: #0056b3;
}

.submit-btn:active {
    background-color: #004085;
}

/* Link styling */
.payment-form a {
    color: #007bff;
    text-decoration: none;
}

.payment-form a:hover {
    text-decoration: underline;
}

/* Button container for form submission */
.submit-btn[type="submit"] {
    margin-top: 1rem;
    font-weight: bold;
}

/* Responsive Design */
@media (max-width: 768px) {
    .form-container {
        padding: 1rem;
        width: 90%;
    }

    .main-title {
        font-size: 1.5rem;
    }

    .section-title {
        font-size: 1rem;
    }
}
</style> -->
