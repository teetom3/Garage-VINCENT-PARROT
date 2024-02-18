<?php 
require 'config/database.php';
$keyword = "";
$price = "";
$mileage = "";

// Vérifier si les données de recherche ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Si le formulaire de recherche a été soumis, récupérer les critères de recherche
    if(isset($_POST['keyword'])){
        $keyword = $_POST['keyword'];
    }
    if(isset($_POST['price'])){
        $price = $_POST['price'];
    }
    if(isset($_POST['mileage'])){
        $mileage = $_POST['mileage'];
    }
}

// Construction de la requête SQL en fonction des critères spécifiés
$sql = "SELECT * FROM voitures";

// Ajouter des conditions de recherche si des critères ont été spécifiés
if (!empty($keyword) || !empty($price) || !empty($mileage)) {
    $sql .= " WHERE (marque_modele LIKE '%$keyword%' )";

    if (!empty($price)) {
        $price_range = explode('-', $price);
        $min_price = $price_range[0];
        $max_price = $price_range[1];
        $sql .= " AND prix BETWEEN $min_price AND $max_price";
    }

    if (!empty($mileage)) {
        $mileage_range = explode('-', $mileage);
        $min_mileage = $mileage_range[0];
        $max_mileage = $mileage_range[1];
        $sql .= " AND kilometrage BETWEEN $min_mileage AND $max_mileage";
    }
}

// Exécution de la requête SQL
$result = $connection->query($sql);

// Affichage des résultats
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='service-card'>";
        echo "<h3>".$row['marque_modele']."</h3>";
        echo "<a href='" . ROOT_URL . "vehicule-single.php?id=" . $row['id'] . "'><img src='./images/" . $row['image'] . "' alt='Voiture d occasion'></a>";
        echo "<p><b>Prix:</b> ".$row['prix']."€</p>";
        echo "<p><b>Kilométrage:</b> ".$row['kilometrage']."km</p>";
        echo "<p><b>Année de mise en circulation :</b> ".$row['annee']."</p>";
        echo "</div>";
    }
} else {
    echo "Aucun résultat trouvé.";
}

?>