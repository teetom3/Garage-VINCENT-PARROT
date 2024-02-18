<?php 

require 'config/database.php';



if(isset($_POST['submit'])) {

    $objet =  filter_var($_POST['objet'], FILTER_SANITIZE_SPECIAL_CHARS);
    $nom =  filter_var($_POST['nom'], FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom =  filter_var($_POST['prenom'], FILTER_SANITIZE_SPECIAL_CHARS);
    $telephone =  filter_var($_POST['telephone'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email =  filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS);
    $message =  filter_var($_POST['message'], FILTER_SANITIZE_SPECIAL_CHARS);


    $sql = "INSERT INTO contact (objet, nom, prenom, telephone, email, message) VALUES ('$objet', '$nom', '$prenom', '$telephone', '$email', '$message')";

    if($avis_insert = mysqli_query($connection,$sql)){
        $_SESSION['add-contact-success'] = "Votre message à été envoyé";
        header('Location:' . ROOT_URL . 'index.php');
        die();
    }
    else {
        // Redirection vers la page avis
        $_SESSION['add-avis-error'] = "Votre message n'a pas été envoyé";
        header('Location: '. ROOT_URL .'contact.php');
        
        die();
    }}