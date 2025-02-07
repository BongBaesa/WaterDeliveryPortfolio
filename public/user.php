<?php
require __DIR__ . '/../src/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['logout'] )) {
    logout();
}
?>

<?php view('dashboard', ['title' => 'Dashboard']) ?>

            <!-- Account setting -->
            <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="profileModalLabel">Account</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container py-4">
                                    <h2 class="mb-4 text-center">Profile Settings</h2>
                                    <form>
                                        <!-- Profile Picture -->
                                        <h4>Profile Picture</h4>
                                        <div class="mb-3">
                                            <img src="" alt="Profile Picture" class="img-thumbnail mb-2">
                                            <input class="form-control" type="file" id="profilePicture">
                                        </div>

                                        <!-- Personal Information -->
                                        <h4>Personal Information</h4>
                                        <div class="mb-3">
                                            <label style="color: #000025;" for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username">
                                        </div>
                                        <div class="mb-3">
                                            <label style="color: #000025;" for="fullName" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="fullName">
                                        </div>
                                        <div class="mb-3">
                                            <label style="color: #000025;" for="email" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="email" placeholder="john.doe@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label style="color: #000025;" for="phone" class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" id="phone" placeholder="+(63) xxxx-xxx-xxxx">
                                        </div>

                                        <!-- Change Password -->
                                        <h4>Change Password</h4>
                                        <div class="mb-3">
                                            <label style="color: #000025;" for="currentPassword" class="form-label">Current Password</label>
                                            <input type="password" class="form-control" id="currentPassword">
                                        </div>
                                        <div class="mb-3">
                                            <label style="color: #000025;" for="newPassword" class="form-label">New Password</label>
                                            <input type="password" class="form-control" id="newPassword">
                                        </div>
                                        <div class="mb-3">
                                            <label style="color: #000025;" for="confirmPassword" class="form-label">Confirm New Password</label>
                                            <input type="password" class="form-control" id="confirmPassword">
                                        </div>

                                        <!-- Modal Footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-success">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <!-- Payment Modal -->
            <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="paymentModalLabel">Payment</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                <div class="container">
                                    <form action="#">
                                        <div class="row">
                                            <div class="d-flex flex-column mb-3">
                                                <h3 class="title">Billing Address</h3>
                                                <div class="mb-3">
                                                    <label style="color: black;"  for="name" class="form-label">Full Name:</label>
                                                    <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label style="color: black;"  for="email" class="form-label">Email:</label>
                                                    <input type="email" class="form-control" id="email" placeholder="Enter email address" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label style="color: black;"  for="address" class="form-label">Address:</label>
                                                    <input type="text" class="form-control" id="address" placeholder="Enter address" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label style="color: black;"  for="city" class="form-label">City:</label>
                                                    <input type="text" class="form-control" id="city" placeholder="Enter city" required>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label style="color: black;"  for="province" class="form-label">Province:</label>
                                                        <input type="text" class="form-control" id="province" placeholder="Enter Province" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label style="color: black;"  for="zip" class="form-label">Zip Code:</label>
                                                        <input type="number" class="form-control" id="zip" placeholder="e.g. 1005" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-column mb-3">
                                                <h3 class="title">Payment</h3>
                                                <div class="mb-3">
                                                    <label class="form-label">Card Accepted:</label>
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/MasterCard_Logo.svg"
                                                        alt="Mastercard" class="img-fluid me-2" width="50">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg"
                                                        alt="PayPal" class="img-fluid me-2" width="50">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/52/GCash_logo.svg"
                                                        alt="E-Wallet" class="img-fluid me-2" width="50">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Paymaya_logo.svg"
                                                        alt="E-Wallet" class="img-fluid me-2" width="50">
                                                </div>

                                                <div class="mb-3">
                                                    <label style="color: black;"  for="cardName" class="form-label">Name on Card:</label>
                                                    <input type="text" class="form-control" id="cardName" placeholder="Enter card name" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label style="color: black;"  for="cardNum" class="form-label">Credit Card Number:</label>
                                                    <input type="text" class="form-control" id="cardNum" placeholder="1111-2222-3333-4444" maxlength="19" required>
                                                </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label style="color: black;"  for="expMonth" class="form-label">Exp Month:</label>
                                                    <select class="form-select" id="expMonth">
                                                        <option value="">Choose month</option>
                                                        <option value="January">January</option>
                                                        <option value="February">February</option>
                                                        <option value="March">March</option>
                                                        <option value="April">April</option>
                                                        <option value="May">May</option>
                                                        <option value="June">June</option>
                                                        <option value="July">July</option>
                                                        <option value="August">August</option>
                                                        <option value="September">September</option>
                                                        <option value="October">October</option>
                                                        <option value="November">November</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label style="color: black;"  for="expYear" class="form-label">Exp Year:</label>
                                                        <select class="form-select" id="expYear">
                                                            <option value="">Choose Year</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2027">2027</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label style="color: black;"  for="cvv" class="form-label">CVV</label>
                                                        <input type="number" class="form-control" id="cvv" placeholder="123" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Proceed to Order</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Settings Modal -->
            <div class="modal fade" id="settingsModal" tabindex="-1" aria-labelledby="settingsModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="settingsModalLabel">Settings</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h2 class="mb-4 text-center">Delivery Settings</h2>
                        <form>

                            <div class="mb-4 d-flex justify-content-between align-items-center">
                                <label style="color: #000025;" class="form-label" for="locationToggle">Allow Delivery Location Access</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input form-check-input-lg" type="checkbox" id="locationToggle">
                                </div>
                            </div>

                            <div class="mb-4 d-flex justify-content-between align-items-center">
                                <label style="color: #000025;" class="form-label" for="emailToggle">Receive Delivery Email Notifications</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input form-check-input-lg" type="checkbox" id="emailToggle">
                                </div>
                            </div>

                            <div class="mb-4 d-flex justify-content-between align-items-center">
                                <label style="color: #000025;" class="form-label" for="notificationToggle">Receive Order Updates</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input form-check-input-lg" type="checkbox" id="notificationToggle">
                                </div>
                            </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logout Modal -->
                <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to log out?
                            </div>
                            <div class="modal-footer">
                                <form method="post">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" name="logout" class="btn btn-danger">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


        <!--Product Details that displayed-->
        <label class="label-order">Order your water</label>

        <div class="products">
            
            <div class="product">
                <img class="cntr" src="product/_product1_.jpg">
                <h4 class="label-product">Water bottle | 1 liter</h4>
                <div class="shop-item-details">
                    <h3 class="price">₱12</h3>
                    <button class="button-order" type="button">Order</button>
                </div>
            </div>

            <div class="product">
                <img class="cntr" src="product/_product2_.jpg">
                <h4 class="label-product">Water bottle | 250mL</h4>
                <div class="shop-item-details">
                    <h3 class="price">₱7</h3>
                    <button class="button-order" type="button">Order</button>
                </div>
            </div>

            <div class="product">
                <img class="cntr" src="product/_product3_.jpg">
                <h4 class="label-product">Water bottle | 500mL</h4>
                <div class="shop-item-details">
                    <h3 class="price">₱9</h3>
                    <button class="button-order" type="button">Order</button>
                </div>
            </div>

            <div class="product">
                <img class="cntr" src="product/_product4_.jpg">
                <h4 class="label-product">Water bottle | 5 liters</h4>
                <div class="shop-item-details">
                    <h3 class="price">₱20</h3>
                    <button class="button-order" type="button">Order</button>
                </div>
            </div>

            <div class="product">
                <img class="cntr" src="product/_product5_.jpg">
                <h4 class="label-product"> Slim Water Container | 5Gallon</h4>
                <div class="shop-item-details">
                    <h3 class="price">₱20</h3>
                    <button class="button-order" type="button">Order</button>
                </div>
            </div>

            <div class="product">
                <img class="cntr" src="product/_product6_.jpg">
                <h4 class="label-product">Water Dispenser Round Container | 5Gallon</h4>
                <div class="shop-item-details">
                    <h3 class="price">₱20</h3>
                    <button class="button-order" type="button">Order</button>
                </div>
            </div>

        </div>