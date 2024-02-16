
<?php 

require 'config/database.php';

if(isset($_POST['submit']))  {
    

   
   
        // Récupérer les données du formulaire pour chaque jour de la semaine
        $lundi = $_POST['lundi'];
        $mardi = $_POST['mardi'];
        $mercredi = $_POST['mercredi'];
        $jeudi = $_POST['jeudi'];
        $vendredi = $_POST['vendredi'];
        $samedi = $_POST['samedi'];
        $dimanche = $_POST['dimanche'];
    
     
    
        // Vérifier la connexion
        if ($connection->connect_error) {
            die("La connexion a échoué : " . $conn->connect_error);
        }
    
        // Préparer et exécuter les requêtes SQL pour mettre à jour les descriptions dans la table "horaires"
        $sql = "UPDATE horaires SET description = ? WHERE jour_semaine = ?";
        $stmt = $connection->prepare($sql);
    
        // Vérifier si la préparation de la requête a échoué
        if ($stmt === false) {
            die("Erreur de préparation de la requête: " . $connection->error);
        }
    
        // Boucle pour exécuter la requête pour chaque jour de la semaine
        $jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
        foreach ($jours as $jour) {
            // Assigner la valeur correcte du jour
            switch ($jour) {
                case 'Lundi':
                    $description = $lundi;
                    break;
                case 'Mardi':
                    $description = $mardi;
                    break;
                case 'Mercredi':
                    $description = $mercredi;
                    break;
                case 'Jeudi':
                    $description = $jeudi;
                    break;
                case 'Vendredi':
                    $description = $vendredi;
                    break;
                case 'Samedi':
                    $description = $samedi;
                    break;
                case 'Dimanche':
                    $description = $dimanche;
                    break;
            }
    
            // Exécuter la requête
            $stmt->bind_param("ss", $description, $jour);
            $stmt->execute();
    
            // Vérifier si l'exécution de la requête a échoué
            if ($stmt->errno) {
                die("Erreur lors de l'exécution de la requête: " . $stmt->error);
            }
        }
    
        // Fermer la requête
        $stmt->close();
    
        // Fermer la connexion à la base de données
     
    
        // Redirection vers une page de confirmation ou autre
        header("Location: " . ROOT_URL . "admin/edit-horaires.php");
        $_SESSION['add-horaires-success'] = "Les horaires ont été modifié";
    exit();
    }
    ?>
    
   
