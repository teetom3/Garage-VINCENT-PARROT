<?php 
require 'config/database.php';

if(isset($_GET['id'])) {

 //delete user from database 
 $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
 $delete_query = "DELETE FROM users WHERE id=$id";
 $delete_result = mysqli_query($connection, $delete_query);
 if(mysqli_errno($connection)) {
     $_SESSION['delete-user-error'] = "Une erreur c'est produite" ;
 } else {
     $_SESSION['delete-user-success'] ="Utilisateur supprimé";
 }
} 
header('Location: ' . ROOT_URL . 'admin/manage-utilisateurs.php' );
die();
?>