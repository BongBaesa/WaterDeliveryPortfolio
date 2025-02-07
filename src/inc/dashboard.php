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
    <main>
<script src="assets/script.js"></script>

<?php flash() ?>


