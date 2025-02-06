<?php
$current_url = $_SERVER['REQUEST_URI'];

$filename = strtoupper(pathinfo($current_url, PATHINFO_FILENAME));
if (strtolower($filename) == 'user') {
    $filename = 'ORDER';
} else {
    $filename = strtoupper($filename);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title><?= $filename . ' | RY DE LUNA' ?? 'ERROR'; ?></title>

</head>
<body>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <div class="nav-container">
            <div class="nav-logo">
                <a href="index.php">
                    <img class="logo" src="images/RYdeLUNA_Logo.png" alt="logo">
                </a>
            </div>

            <div class="dropdown-user">
                <!-- Notifications -->
                <button class="dropdown-button" onclick="toggleDropdown('dropdown-message')">
                    <i class="fa-regular fa-bell"></i>
                </button>
                <ul id="dropdown-message" class="dropdown-content-inbox">
                    <li class="close-sidebar" onclick="toggleDropdown()">
                        <i class="fas fa-times"></i>
                    </li>
                    <li class="inbox">No new messages</li>
                </ul>

                <!-- Shopping Cart -->
                <button class="dropdown-button" onclick="toggleDropdown('dropdown-product')">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
                <ul id="dropdown-product" class="dropdown-content-inbox">
                    <li class="close-sidebar" onclick="toggleDropdown()">
                        <i class="fas fa-times"></i>
                    </li>
                    <li class="inbox">No add cart product</li>
                </ul>

                <!-- User Menu -->
                <button class="dropdown-button" onclick="toggleDropdown('dropdown-menu', true)">
                    <i class="fas fa-user-circle"></i>
                </button>
                <ul id="dropdown-menu" class="dropdown-content">
                    <li class="close-sidebar" onclick="toggleDropdown()">
                        <i class="fas fa-times"></i>
                    </li>
                    <li class="menu" onclick="openModal('#profileModal')">Profile</li>
                    <li class="menu" onclick="openModal('#paymentModal')">Payment</li>
                    <li class="menu" onclick="openModal('#settingsModal')">Settings</li>
                    <li class="menu" onclick="openModal('#logoutModal')">Logout</li>
                </ul>
            </div>

            <div class="overlay" onclick="closeAllDropdowns()"></div>
        </div>

        <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalLabel">Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container py-4">
                    <h2 class="mb-4 text-center">User Settings</h2>
                    <form>
                        <!-- Profile Picture -->
                        <h4>Profile Picture</h4>
                        <div class="mb-3">
                            <img src="/api/placeholder/150/150" alt="Profile Picture" class="img-thumbnail mb-2">
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
        <div class="modal fade" id="settingsModal" tabindex="-1" aria-labelledby="settingsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="settingsModalLabel">Settings</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Your settings options go here.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger">Logout</button>
                        </div>
                    </div>
                </div>
            </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<main>

<style>

    

    .dropdown-user {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }


    .dropdown-button {
        background: none;
        border: none;
        cursor: pointer;
        font-size: 1.8em;
        color: #155E95;
        display: inline-flex;
        align-items: center;
        margin: 5px;
        justify-content: center;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        transition: background-color .3s;
        position: relative;
    }


    .dropdown-button:hover {
        background-color: #e0e0e0;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: rgba(38, 160, 226, 0.7);
        min-width: 180px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, .2);
        z-index: 2;
        list-style: none;
        padding: 10px 0;
        margin: 0;
        right: 0;
        top: 100%;
        border-radius: 8px;
        transition: all .3 ease;
    }

    .dropdown-content-inbox {
        display: none;
        position: absolute;
        background-color: rgba(38, 160, 226, 0.7);
        min-width: 180px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, .2);
        z-index: 2;
        list-style: none;
        padding: 10px 0;
        margin: 0;
        right: 0;
        top: 100%;
        border-radius: 8px;
        transition: all .3 ease;
    }


    #dropdown-menu::before {
        content: "";
        position: absolute;
        top: -10px; 
        right: 20px;
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 10px solid rgba(38, 160, 226, 0.9);
    }

    #dropdown-message::before {
        content: "";
        position: absolute;
        top: -10px;
        right: 10rem; 
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 10px solid rgba(38, 160, 226, 0.9);
    }
   
    #dropdown-product::before {
        content: "";
        position: absolute;
        top: -10px; 
        right: 5.5rem; 
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 10px solid rgba(38, 160, 226, 0.9);
    }


    .dropdown-content.show,
    .dropdown-content-inbox.show {
    display: block;
    }

    #dropdown-message,
    #dropdown-product {
        width: 300px;
        height: 250px;
    }

    .inbox {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #ffffff;
        background-color: rgba (255, 255, 255, .2);
        font-size: 1rem;
        padding: 15px;
    }

    .dropdown-content .menu, .dropdown-content-inbox, .close-sidebar{
        padding: 12px 16px;
        cursor: pointer;
        text-align: left;
        transition: background-color .3s;
        color: #ffffff;
    }

    .dropdown-content .menu:hover, .dropdown-content-inbox .menu:hover{
        background-color: #ffffff25;
    }
    
    .show{
        display: block;
    }

    .close-sidebar {
        display: none;
    }

    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .5);
        z-index: 1;
    }
    
    
    /* Responsive user */
    
    @media screen and (max-width: 992px){
        
        .dropdown-button {
            width: 50px;
            height: 50px;
            display: inline-flex;
        }

        .dropdown-content, 
        .dropdown-content-inbox {
            min-width: 160px;
            left: auto;
            right: 0;
        }

        .dropdown-content .menu, .dropdown-content-inbox .menu {
            padding: 10px 14px;
            font-size: 14px;
        }

        .inbox {
            font-size: 1em;
            padding: 12px;
        }
    }
    
    
    @media screen and (max-width: 768px){
        .dropdown-content {
            position: fixed;
            top: 0;
            right: 0;
            left: auto;
            width: 70%;
            max-width: 300px;
            height: 100vh;
            border-radius: 2%;
            transform: translateX(100%);
            transition: transform 0.3s ease;
            display: block;
            background-color: rgb(115, 201, 247);
            padding: 20px;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.2);
        }

        .dropdown-content-inbox {
            position: absolute;
            top: 100%;
            left: 50%;
            top: calc(100% + 10px); /* Moves the dropdown slightly lower */
            transform: translateX(-50%); 
            width: auto; 
            max-width: 280px;
            height: auto;
            border-radius: 8px;
            transition: all 0.3s ease;
            background-color: rgb(115, 201, 247);
            padding: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .dropdown-content-inbox::before {
            left: 50%;
            transform: translateX(-50%);
            right:auto
        }

        #dropdown-message::before {
            content: "";
            position: absolute;
            top: -10px;
            left: 6.2rem; 
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid rgba(38, 160, 226, 0.9);
        }
    
        #dropdown-product::before {
            content: "";
            position: absolute;
            top: -10px; 
            left: 10.4rem; 
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid rgba(38, 160, 226, 0.9);
        }


        .close-sidebar {
            display: flex;
            justify-content: flex-end;
            border-bottom: 1px solid rgba(255, 255, 255, .2);
            position: absolute;
            right: 10px;
        }

        .close-icon {
            font-size: 32px;
            color: white;
            cursor: pointer;
            transition: transform .2s ease;
            line-height: 1;
        }

        .close-icon:hover {
            transform: scale(1.2);
        }

        .dropdown-content.show {
            transform: translateX(0);
        }

        .dropdown-content-inbox.show {
        transform: translateX(-50%) translateY(0);
        }

        .dropdown-content .menu {
            padding: 15px 20px;
            font-size: 16px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            top: 30px;
        }

        .dropdown-content-inbox .menu {
        padding: 12px 16px;
        font-size: 14px;
        text-align: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .overlay.active {
            display: block;
        }

        .dropdown-button {
            font-size: 1.6em;
            width: 45px;
            height: 45px;
            position: relative;
            left: 25px;
        }

        .inbox {
            font-size: 1em;
            padding: 10px;
        }
    }


</style>


<script>
    function toggleDropdown (id, isUserMenu = false) {
        const dropdown = document.getElementById(id);
        const overlay = document.querySelector('.overlay');
        const isCurrentlyOpen = dropdown.classList.contains("show");

        closeAllDropdowns();

        if (!isCurrentlyOpen) {
            dropdown.classList.add("show");
            
            if (isUserMenu) {
            overlay.classList.add("active");
            }
        }
    }

    function closeAllDropdowns() {
        document.querySelectorAll('.dropdown-content, .dropdown-content-inbox').forEach((el) => {
            el.classList.remove('show');
        });

        document.querySelector('.overlay').classList.remove("active");
    }

    document.querySelectorAll('.close-sidebar').forEach((btn) => {
        btn.addEventListener("click", closeAllDropdowns);
    });


    window.addEventListener('click', function(e) {
        if(!e.target.closest('.dropdown-user')) {
            closeAllDropdowns();
        }
    });

    function openModal(modalId) {
        var modal = new bootstrap.Modal(document.querySelector(modalId));
        modal.show();
    }
</script>

<?php flash() ?>


