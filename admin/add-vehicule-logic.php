<?php 

require 'config/database.php';



//

if(isset($_POST['submit'])) {

    $marque_modele =  filter_var($_POST['marque_modele'], FILTER_SANITIZE_SPECIAL_CHARS);
    $annee =  filter_var($_POST['annee'], FILTER_SANITIZE_NUMBER_INT);
    $kilometrage =  filter_var($_POST['kilometrage'], FILTER_SANITIZE_NUMBER_INT);
    $prix =  filter_var($_POST['prix'], FILTER_SANITIZE_NUMBER_INT);
    $description =  filter_var($_POST['description'], FILTER_SANITIZE_SPECIAL_CHARS);
   


      // Vérification et traitement de l'image
      
      $targetFile = '../images/' . basename($_FILES["image"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
      
      // Vérifier si le fichier est une image réelle ou une fausse image
      if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["image"]["tmp_name"]);
          if($check !== false) {
              echo "Le fichier est une image - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
              echo "Le fichier n'est pas une image.";
              $uploadOk = 0;
          }
      }
      
      // Vérifie si le fichier existe déjà
      if (file_exists($targetFile)) {
          echo "Désolé, le fichier existe déjà.";
          $uploadOk = 0;
      }
      
      // Vérifie la taille du fichier
      if ($_FILES["image"]["size"] > 500000) {
          echo "Désolé, votre fichier est trop volumineux.";
          $uploadOk = 0;
      }
      
      // Autorise certains formats de fichiers
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
          echo "Désolé, seuls les fichiers JPG, JPEG, PNG & GIF sont autorisés.";
          $uploadOk = 0;
      }
      
      // Vérifie si $uploadOk est à 0 pour les erreurs
      if ($uploadOk == 0) {
          echo "Désolé, votre fichier n'a pas été téléchargé.";
      // Si tout est correct, téléchargez le fichier
      } else {
          if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
              echo "Le fichier ". htmlspecialchars( basename( $_FILES["image"]["name"])). " a été téléchargé.";
              
              // Insertion des données dans la base de données
              $sql = "INSERT INTO voitures (marque_modele, annee, kilometrage, prix, description, image)
              VALUES ('$marque_modele', '$annee', '$kilometrage', '$prix', '$description', '$targetFile')";
              
              if(mysqli_query($connection, $sql)){
                  echo "Enregistrement réussi.";
                  header("Location: " . ROOT_URL . "admin/manage-vehicule.php"); // Redirection vers la page de gestion des véhicules
                  exit();
              } else{
                  echo "Erreur: " . mysqli_error($connection);
              }
          } else {
              echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
          }
      }
      
      // Fermer la connexion à la base de données
      mysqli_close($connection);
  } else {
      // Redirection si le formulaire n'est pas soumis
      header("Location: index.php");
      exit();
  }
  ?>