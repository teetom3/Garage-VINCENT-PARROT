<?php

require 'config/database.php';


if(isset($_GET['id'])) {
    $id=filter_var($_GET['id' ], FILTER_SANITIZE_NUMBER_INT);

    // fetch voiture from database in order to delete  images 
    $query = "SELECT * FROM services WHERE id=$id";
    $result = mysqli_query($connection, $query);

    //make sure only 1 record was fetched 

    if(mysqli_num_rows($result)== 1  ) {
        $service = mysqli_fetch_assoc($result);
        $image_name = $service['image'];
        $image_path = '../images/' . $image_name;


        if($image_path) {
            unlink($image_path);

            // delete service from database
            $delete_service_query = "DELETE FROM services WHERE id=$id LIMIT 1";
            $delete_service_result = mysqli_query($connection,$delete_service_query);

            if(!mysqli_errno($connection)) {
                $_SESSION['delete-service-success'] = "Service supprimé";
            }
        }
    }
}

header('Location: ' . ROOT_URL . 'admin/manage-services.php');
;