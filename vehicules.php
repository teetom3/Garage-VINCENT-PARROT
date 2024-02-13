<?php 
include 'partials/header.php'
?>



<!---SECTION VEHICULES -------------------------------------->




<form class="vehicule_search" action="search" method="GET">
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



<!----- FIN DE RECHERCHE DES VEHICULES -->


<section class="vehicle-sales-banner">
    <h2>Vente de véhicules d'occasion</h2>
  </section>
  
  <section class="vehicle-sales">
    <div class="vehicle-card">
      <h3>Marque et Modèle</h3>
      <img src="./images/car-604019_1280.jpg" alt="Voiture d'occasion">
      <p>Prix : XXXX €</p>
      <p>Kilométrage : XXXX km</p>
      <p>Année de mise en circulation : XXXX</p>
    </div>

    <div class="vehicle-card">
        <h3>Marque et Modèle</h3>
        <img src="./images/car-604019_1280.jpg" alt="Voiture d'occasion">
        <p>Prix : XXXX €</p>
        <p>Kilométrage : XXXX km</p>
        <p>Année de mise en circulation : XXXX</p>
      </div>

      <div class="vehicle-card">
        <h3>Marque et Modèle</h3>
        <img src="./images/car-604019_1280.jpg" alt="Voiture d'occasion">
        <p>Prix : XXXX €</p>
        <p>Kilométrage : XXXX km</p>
        <p>Année de mise en circulation : XXXX</p>
      </div>

      <div class="vehicle-card">
        <h3>Marque et Modèle</h3>
        <img src="./images/car-604019_1280.jpg" alt="Voiture d'occasion">
        <p>Prix : XXXX €</p>
        <p>Kilométrage : XXXX km</p>
        <p>Année de mise en circulation : XXXX</p>
      </div>


      <div class="vehicle-card">
        <h3>Marque et Modèle</h3>
        <img src="./images/car-604019_1280.jpg" alt="Voiture d'occasion">
        <p>Prix : XXXX €</p>
        <p>Kilométrage : XXXX km</p>
        <p>Année de mise en circulation : XXXX</p>
      </div>

      <div class="vehicle-card">
        <h3>Marque et Modèle</h3>
        <img src="./images/car-604019_1280.jpg" alt="Voiture d'occasion">
        <p>Prix : XXXX €</p>
        <p>Kilométrage : XXXX km</p>
        <p>Année de mise en circulation : XXXX</p>
      </div>
    <!-- Ajoutez plus de cards de voitures ici -->
  </section>



  <?php 
include 'partials/footer.php'
?>

