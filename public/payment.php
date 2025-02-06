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