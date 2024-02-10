<?php

require './config/database.php';

//fetch current user from database 

if(isset($_SESSION['user-id'])) {
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query =" SELECT avatar FROM users WHERE id=$id";
    $result = mysqli_query($connection,$query);
    $avatar = mysqli_fetch_assoc($result);
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multipage Blog Website</title>
    <!--Custom styleshhet-->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
    <!--ICONSCOUNT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!--FONTSTYLE MONTSERRAT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
 
   
    <!--     ===================== END OF THE NAV=========================-->


    <nav class="navbar">
  <div class="navbar-left">
    <span class="brand">VINCENT PARROT</span>
  </div> 
  <div class="navbar-right">
    <ul class="nav-links">
      <li><a href="#">Véhicules d'occasion</a></li>
      <li><a href="#">Nos services</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Avis</a></li>
      <li><a href="#">Connexion</a></li>
    </ul>
    
    
  </div>
  <div class="nav-bar-buttons">
    <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
    <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
  </div>
</nav>