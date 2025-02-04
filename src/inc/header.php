<?php
$current_url = $_SERVER['REQUEST_URI'];

$filename = strtoupper(pathinfo($current_url, PATHINFO_FILENAME));
if (strtolower($filename) == 'index') {
    $filename = 'HOME';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title><?= $filename . ' | RY DE LUNA' ?? 'ERROR'; ?></title>

</head>
<body>
<div class="nav-container">
   
    <div class="nav-logo">
        <a href="index.php"><img class="logo" src="images/RYdeLUNA_Logo.png" alt="logo"></a>
    </div>
        
    <i class="fa-solid fa-bars open-menu"></i>
    <div class="background"></div>

    <div class="nav-links-container">

    <i class="fa-solid fa-xmark close-menu"></i>

        <ul class="nav-links">      
            <li class="nav-link-item dropdown-menu-branch">
                <a href="index.php" data-toggle="dropdown-menu">Home <i class="fa-solid fa-chevron-down"></i></a>
               
            <ul class="dropdown-menu">
                    <li class="dropdown-menu-item"><a href="login.php">Login/Sign Up</a></li>
                    <li class="dropdown-menu-item"><a href="features.php">Why Choose Us?</a></li>
                    <li class="dropdown-menu-item"><a href="feedback.php">Give us feedback</a></li>
            </ul>
          
            </li>
                
            <li class="nav-link-item dropdown-menu-branch"><a href="#" data-toggle="dropdown-menu">About<i class="fa-solid fa-chevron-down"></i></a>
            
                <ul class="dropdown-menu">
                    <li class="dropdown-menu-item"><a href="about.php">Our Story</a></li>
                    <li class="dropdown-menu-item"><a href="values.php">Our Values</a></li>
                    <li class="dropdown-menu-item"><a href="responsibility.php">Our Responsibilities</a></li>
                </ul>

            </li>
                
            <li class="nav-link-item dropdown-menu-branch">
                <a href="#" data-toggle="dropdown-menu">Services<i class="fa-solid fa-chevron-down"></i></a>
                
            <ul class="dropdown-menu">
                    <li class="dropdown-menu-item"><a href="services.php">Our Services</a></li>
                    <li class="dropdown-menu-item"><a href="packaging-services.php">Packaging Services</a></li>
            </ul>


            </li>

            <li class="nav-link-item">
                <a href="contact.php">Contact us</a>
            </li>

    </div>
        
</div>
    <script src="assets/main.js"></script>
<main>

    
<?php flash() ?>


