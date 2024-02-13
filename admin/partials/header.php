<?php
require './config/database.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--------- FONT FAMILY PRECONNECT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@100..900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!------------ICONS PRECONNECT-->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">


<!-------------CONNECT STYLE SHEET-->
<link href="<?=ROOT_URL?>/style.css" rel="stylesheet">

    <title>GARAGE VINCENT PARROT</title>
</head>
<body>
   


<nav >
 
    <ul class="sidebar">
      <li class="btn_close"><a href="#" ><svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 -960 960 960" width="24"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
      <li><a href="<?=ROOT_URL?>admin/manage-vehicule.php" >Manager Véhicules</a></li>
        <li><a href="<?=ROOT_URL?>admin/add-vehicule.php">Ajouter Véhicules</a></li>
        <li><a href="<?=ROOT_URL?>admin/manage-utilisateurs.php">Manager Utilisateurs</a></li>
        <li><a href="<?=ROOT_URL?>admin/add-users.php">Ajouter Utilisateurs</a></li>
        <li><a href="<?=ROOT_URL?>admin/manage-avis.php">Manager Avis</a></li>
        <li><a href="<?=ROOT_URL?>admin/edit-horaires.php">Editer Horaires</a></li>
        <li class="hideOnMobile"><a href="#">Deconnexion</a></li>
    </ul>

    <ul class="navlist">
        <li><a href="<?=ROOT_URL?>admin/manage-vehicule.php"  >VINCENT PARROT</a></li>      
        <li class="hideOnMobile"><a href="<?=ROOT_URL?>admin/manage-vehicule.php" >Manager Véhicules</a></li>
        <li class="hideOnMobile"><a href="<?=ROOT_URL?>admin/add-vehicule.php">Ajouter Véhicules</a></li>
        <li class="hideOnMobile"><a href="<?=ROOT_URL?>admin/manage-utilisateurs.php">Manager Utilisateurs</a></li>
        <li class="hideOnMobile" ><a href="<?=ROOT_URL?>admin/add-users.php">Ajouter Utilisateurs</a></li>
        <li class="hideOnMobile"><a href="<?=ROOT_URL?>admin/manage-avis.php">Manager Avis</a></li>
        <li class="hideOnMobile" ><a href="<?=ROOT_URL?>admin/edit-horaires.php">Editer Horaires</a></li>
        <li class="hideOnMobile"><a href="#">Deconnexion</a></li>
      <li class="btn_nav"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 -960 960 960" width="24"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
    </ul>
    
</nav>

<!-------------Fin de la nav-->