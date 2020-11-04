<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Buddy</title>

    <link rel="stylesheet" href="../css/main.css">

    <script src="https://kit.fontawesome.com/b9b35f3ec9.js" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <!-- navabar section start -->
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="../dist/index.php">Travel<span>Buddy.</span></a></div>
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">How it works</a></li>

                <?php
                if(isset($_SESSION['userName'])){
                    echo '<li><a href="../config/logOut.inc.php">Log Out</a></li>';
                }
                else{
                    echo '<li><a href="../dist/login.php">Log In</a></li>';
                }
                ?>
                
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav><!-- navbar section close -->