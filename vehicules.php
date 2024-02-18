<?php 
include 'partials/header.php';


?>
<section class="vehicle-sales-banner">
    <h2>Vente de véhicules d'occasion</h2>
  </section>
<form id="vehicule_search"  method="GET">
  <input type="text" name="keyword" placeholder="Recherche par mot-clé">
  <label for="price">Prix :</label>
  <select name="price" id="price">
      <option value="">Tous les prix</option>
      <option value="0-5000">0 - 5000 €</option>
      <option value="5001-10000">5001 - 10000 €</option>
      <option value="10001-20000">10001 - 20000 €</option>
      <option value="20001-30000">20001 - 30000 €</option>
      <option value="30001-50000">30001 - 50000 €</option>
      <option value="50001-75000">50001 - 75000 €</option>
      <option value="75001-100000">75001 - 100000 €</option>
      <option value="100001-150000">100001 - 150000 €</option>
  </select>
  <label for="mileage">Kilométrage :</label>
  <select name="mileage" id="mileage">
      <option value="">Tous les kilométrages</option>
      <option value="0-10000">0 - 10 000 km</option>
      <option value="10001-50000">10 001 - 50 000 km</option>
      <option value="50001-100000">50 001 - 100 000 km</option>
      <option value="100001-200000">100 001 - 200 000 km</option>
      <option value="200001-300000">200 001 - 300 000 km</option>
      <option value="300001-500000">300 001 - 500 000 km</option>
  </select>
  <button type="submit">Rechercher</button>
</form>

  
  <section class="vehicle-sales">
  <div id="searchResults"></div>
  </section>
<script>
// Fonction pour effectuer la requête AJAX
function performAjaxRequest(formData) {
    // Envoi des données du formulaire via AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'search.php', true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Mise à jour de la partie de la page affichant les résultats
            document.getElementById('searchResults').innerHTML = xhr.responseText;
        } else {
            console.log('Une erreur s\'est produite.');
        }
    };
    xhr.send(formData);
}

// Appel de la fonction au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
    var formData = new FormData(); // Vous pouvez également initialiser avec des données par défaut si nécessaire
    performAjaxRequest(formData);
});

// Ajout d'un écouteur d'événement sur la soumission du formulaire
document.getElementById('vehicule_search').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche le formulaire de se soumettre normalement

    // Récupération des données du formulaire
    var formData = new FormData(this);

    // Appel de la fonction pour effectuer la requête AJAX
    performAjaxRequest(formData);
});
</script>


 





<!----- FIN DE RECHERCHE DES VEHICULES -->










<!---SECTION VEHICULES -------------------------------------->







  <?php 
include 'partials/footer.php'
?>

