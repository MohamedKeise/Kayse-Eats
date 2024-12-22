<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  
error_reporting(0);  
session_start(); 
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Kayse Eats Map Page">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Map - Kayse Eats</title>
    <!-- Bootstrap and Custom CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
       /* General Styling */
/* General Styling */
html, body {
    height: 100%; /* Ensure full height of viewport */
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    color: #333;
    display: flex;
    flex-direction: column; /* Use column layout */
}

body {
    flex: 1; /* Ensure the body takes up remaining space */
}

/* Header Styling */
#header {
    background: #111;
    color: #fff;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    position: sticky;
    top: 0;
    z-index: 100;
}

.navbar-brand img {
    height: 50px;
}

.navbar-nav .nav-item .nav-link {
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    transition: color 0.3s;
}

.navbar-nav .nav-item .nav-link:hover {
    color: #ff5722;
}

.nav-link.active {
    border-bottom: 2px solid #ff5722;
}

/* Map Styling */
.map-container {
    width: 100%;
    flex-grow: 1; /* Allow the map to take up all available space */
    margin: 0; /* Ensure no margins */
}

iframe {
    width: 100%;
    height: 100vh; /* Make the map fill the screen */
    border: none;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

/* Footer Styling */
footer {
    background: #141a26;
    color: #fff;
    text-align: center;
    padding: 30px 20px; /* Adjusted padding for better spacing */
    margin-top: auto; /* Ensure footer sticks to the bottom */
}

footer h4 {
    font-size: 18px; /* Increased font size for visibility */
    font-weight: bold;
    margin-bottom: 10px;
    color: #ff5722; /* Contrasting color for title */
}

footer p {
    font-size: 14px; /* Increased font size */
    margin-bottom: 10px;
    color: #fff;
}

footer .footer-links {
    margin-bottom: 15px;
}

footer .footer-links a {
    color: #ff5722; /* Make links stand out with a vibrant color */
    margin: 0 15px;
    text-decoration: none;
    font-size: 14px;
    transition: color 0.3s ease, text-decoration 0.3s ease;
}

footer .footer-links a:hover {
    text-decoration: underline;
    color: #ffffff; /* Change link color on hover */
}

footer .social-icons {
    margin-top: 20px;
}

footer .social-icons a {
    display: inline-block;
    color: #fff;
    background: #ff5722;
    width: 35px;
    height: 35px;
    line-height: 35px;
    border-radius: 50%;
    margin: 0 10px;
    font-size: 18px;
    transition: background 0.3s, color 0.3s;
}

footer .social-icons a:hover {
    background: #fff;
    color: #ff5722;
}




    </style>
</head>

<body class="home">
    <!-- Header -->
    <header id="header" class="header-scroll top-header headrom">
        <nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                <a class="navbar-brand" href="index.php">
                    <img class="img-rounded" src="images/kayse-eats-high-resolution-logo-transparent (2).ico" alt="Kayse Eats Logo">
                </a>
                <div class="collapse navbar-toggleable-md float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="restaurants.php">Restaurants</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link active" href="map.php">Map</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Map Section -->
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14958.824776473766!2d44.040519854135574!3d9.562834231062947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1628bff7447d580d%3A0x9d96fe5580edc414!2sASSOD%20HOTELs!5e1!3m2!1sen!2sso!4v1731850566215!5m2!1sen!2sso" 
            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <!-- Footer -->
    <footer>
        <h4>Kayse Eats - Connecting Foodies Everywhere</h4>
        <p>&copy; 2024 Kayse Eats. All Rights Reserved.</p>
        <div class="footer-links">
            <a href="privacy.php">Privacy Policy</a> |
            <a href="terms.php">Terms of Service</a> |
            <a href="contact.php">Contact Us</a>
        </div>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://tiktok.com" target="_blank"><i class="fa fa-music"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>
</html>
