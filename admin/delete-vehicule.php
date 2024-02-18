<?php 
require 'config/database.php';


if(isset($_GET['id'])) {
    $id=filter_var($_GET['id' ], FILTER_SANITIZE_NUMBER_INT);

    // fetch voiture from database in order to delete  images 
    $query = "SELECT * FROM voitures WHERE id=$id";
    $result = mysqli_query($connection, $query);

    //make sure only 1 record was fetched 

    if(mysqli_num_rows($result)== 1  ) {
        $voiture = mysqli_fetch_assoc($result);
        $image_name = $voiture['image'];
        $image_path = '../images/' . $image_name;


        if($image_path) {
            unlink($image_path);

            // delete post from database
            $delete_voiture_query = "DELETE FROM voitures WHERE id=$id LIMIT 1";
            $delete_voiture_result = mysqli_query($connection,$delete_voiture_query);

            if(!mysqli_errno($connection)) {
                $_SESSION['delete-voiture-success'] = "Post deleted";
            }
        }
    }
}

header('Location: ' . ROOT_URL . 'admin/manage-vehicule.php');
;