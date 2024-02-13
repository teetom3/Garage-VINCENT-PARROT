<?php 

require 'config/database.php';


error_reporting(E_ALL);

// Récupération des données du formulaire lorsqu'il est soumis
if(isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Validation des valeurs saisies
    if (!$firstname) {
        $_SESSION['add-user'] = 'Please enter your firstname';
    }
    elseif (!$lastname) {
        $_SESSION['add-user'] = 'Please enter your lastname';
    }   
    elseif (!$email) {
        $_SESSION['add-user'] = 'Please enter your email';
    }  
    elseif (strlen($createpassword) < 8 ) {
        $_SESSION['add-user'] = 'Password should be 8+ characters';
    } 
    else {
        // Hachage du mot de passe
        $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

        // Vérification si le nom d'utilisateur ou l'email existent déjà dans la base de données
        $user_check_query = "SELECT * FROM users WHERE email='$email'";
        $user_check_result = mysqli_query($connection, $user_check_query);
        if (mysqli_num_rows($user_check_result) > 0 ){
            $_SESSION['add-user'] = "Email already exists";
        } else {
            // Insertion du nouvel utilisateur dans la table users
            $insert_user_query = "INSERT INTO users (lastname, firstname, email , password) 
                                  VALUES ('$lastname', '$firstname', '$email', '$hashed_password')";
            if (mysqli_query($connection, $insert_user_query) && mysqli_affected_rows($connection) > 0) {
                // Redirection vers la page de gestion des utilisateurs avec un message de succès
                $_SESSION['add-user-success'] = "New user $firstname $lastname successfully added";
                header('Location:' . ROOT_URL . 'admin/manage-utilisateurs.php');
                die();
            } else {
                // Une erreur s'est produite lors de l'insertion
                $_SESSION['add-user'] = "Error during registration. Please try again.";
            }
        }
    }

    // Redirection vers la page d'ajout d'utilisateur en cas de problème
    if(isset($_SESSION['add-user'])) {
        $_SESSION['add-user-data'] = $_POST;
        header('Location: ' . ROOT_URL . 'admin/add-users.php');
        die();
    }
} else {
    // Redirection vers la page d'ajout d'utilisateur si le bouton n'a pas été cliqué
    header('Location: '. ROOT_URL .'admin/add-users.php');
    die();
}
