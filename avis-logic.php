<?php 

require 'config/database.php';



if(isset($_POST['submit'])) {

    $note =  filter_var($_POST['rating'], FILTER_SANITIZE_NUMBER_INT);
    $avis =  filter_var($_POST['review'], FILTER_SANITIZE_SPECIAL_CHARS);
    $nom =  filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email =  filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS);


    $sql = "INSERT INTO avis (note, avis, nom, email) VALUES ('$note', '$avis', '$nom', '$email')";

    if($avis_insert = mysqli_query($connection,$sql)){
        $_SESSION['add-avis-success'] = "Votre avis à été ajouté";
        header('Location:' . ROOT_URL . 'index.php');
        die();
    }
    else {
        // Redirection vers la page avis
        $_SESSION['add-avis-error'] = "Votre avis n'a pas été ajouté";
        header('Location: '. ROOT_URL .'avis.php');
        
        die();
    }}




