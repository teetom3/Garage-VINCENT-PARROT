<?php 

require 'config/database.php';

if(isset($_GET['id'])) {

 //delete user from database 
 $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
 $publication_query = "UPDATE avis SET publication = 1 WHERE id=$id";
 $publication_result = mysqli_query($connection, $publication_query);
 if(mysqli_errno($connection)) {
     $_SESSION['publie-avis-error'] = "Une erreur c'est produite" ;
 } else {
     $_SESSION['publie-avis-success'] ="Avis publié";
 }
} 
header('Location: ' . ROOT_URL . 'admin/manage-avis.php' );
die();
?>