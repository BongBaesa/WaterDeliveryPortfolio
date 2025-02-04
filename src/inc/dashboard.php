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
    <title><?= $filename . ' | RY DE LUNA' ?? 'ERROR'; ?></title>

</head>
<body>
    <div class="nav-container">
  
        <div class="nav-logo">
            <a href="index.php"><img class="logo" src="images/RYdeLUNA_Logo.png" alt="logo"></a>
            </div>
        
            <div class="dropdown-user">

                <buttton class="dropdown-button" onclick="toggleDropdown('dropdown-message')">
                    <i class="fa-regular fa-bell"></i>
                </buttton>
                
                <ul id="dropdown-message" class="dropdown-content-inbox">
                    <li class="close-sidebar" onclick="toggleDropdown()">
                        <i class="fas fa-times"></i>
                    </li>
                    <li class="inbox">No new messages</li>
                </ul>

                <buttton class="dropdown-button" onclick="toggleDropdown('dropdown-product')">
                    <i class="fa-solid fa-cart-shopping"></i>
                </buttton>

                <ul id="dropdown-product" class="dropdown-content-inbox">
                    <li class="close-sidebar" onclick="toggleDropdown()">
                        <i class="fas fa-times"></i>
                    </li>
                    <li class="inbox">No add cart product</li>
                </ul>

                <buttton class="dropdown-button" onclick="toggleDropdown('dropdown-menu', true)">
                    <i class="fas fa-user-circle"></i>
                </buttton>

                <ul id="dropdown-menu" class="dropdown-content">
                    <li class="close-sidebar" onclick="toggleDropdown()">
                        <i class="fas fa-times"></i>
                    </li>
                    <li class="menu">Profile</li>
                    <li class="menu">Payment</li>
                    <li class="menu">Settings</li>
                    <li class="menu">Logout</li>
                </ul>
            </div>
        <div class="overlay" onclick="closeAllDropdowns()"></div>
    </div>
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
</script>

<?php flash() ?>


