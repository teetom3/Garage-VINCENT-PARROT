<?php 
include 'partials/header.php';


$query_voitures = "SELECT * FROM voitures ";

$voitures = mysqli_query($connection, $query_voitures );


?>





<!-----------------FIN DE LA NAV-->

<section class="hero">
    <img src="./images/car-engine-1548434_1280.jpg" alt="Image de présentation">
  
    <div class="hero-text">
      <h1>Bienvenue au Garage Parrot</h1>
      <p>
        Au Garage Vincent Parrot, nous sommes fiers de vous offrir des services de réparation et d'entretien automobile de haute qualité depuis plus de 20 ans.<br>

         Situé au cœur de la ville, notre équipe dévouée de mécaniciens qualifiés est là pour répondre à tous vos besoins en matière de véhicules.
        
        
        
        
        </p>
    </div>
  </section>

  <!---SECTION SERVICES -------------------------------------->

  <section class="services-banner">
    <h2>NOS SERVICES</h2>
  </section>
  

  <section class="services">
    <div class="service-card">
      <img src="./images/auto-repair-3691962_1280.jpg" alt="Réparation mécanique">
      <h2>Réparation mécanique</h2>
      <p>Service complet de réparation mécanique pour tous types de véhicules.</p>
    </div>
    
    <div class="service-card">
      <img src="./images/auto-repair-shop-1954636_1280.jpg" alt="Vidange">
      <h2>Vidange</h2>
      <p>Service de vidange rapide et efficace pour maintenir votre moteur en bonne santé.</p>
    </div>
    
    <div class="service-card">
      <img src="./images/car-dealer-2138927_1280.jpg" alt="Vente de véhicules">
      <h2>Vente de véhicules</h2>
      <p>Découvrez notre sélection de véhicules d'occasion de haute qualité.</p>
    </div>
  
    <div class="service-card">
      <img src="./images/tire-1749597_1280.jpg" alt="Pneus">
      <h2>Pneus</h2>
      <p>Large choix de pneus de qualité pour tous types de véhicules.</p>
    </div>
  </section>
  
<!---SECTION VEHICULES -------------------------------------->


  <section class="vehicle-sales-banner">
    <h2>Vente de véhicules d'occasion</h2>
  </section>
  <?php while($voiture = mysqli_fetch_assoc($voitures)) : ?>
  <section class="vehicle-sales">
    <div class="vehicle-card">
      <h3><?=$voiture['marque_modele']?></h3>
      <img src="./images/<?=$voiture['image']?>" alt="Voiture d'occasion">
      <p><b>Prix:</b> <?=$voiture['prix']?>€</p>
      <p><b>Kilométrage:</b> <?=$voiture['kilometrage']?>km</p>
      <p><b>Année de mise en circulation :</b> <?=$voiture['annee']?></p>
    </div>

    <?php endwhile ?>
    <!-- Ajoutez plus de cards de voitures ici -->
  </section>

<!-------------------------SECTION AVIS CLIENTS------------------------------------->


<section class="testimonial-section">
    <div class="testimonial-banner">
      <h2>VOS AVIS COMPTENT POUR NOUS</h2>
    </div>
  
    <div class="testimonial-cards">
      <!-- Card 1 -->
      <div class="testimonial-card">
        <h3>Nom de la personne 1</h3>
        <div class="stars">★★★★★</div>
        <p>Texte de l'avis 1.</p>
      </div>
  
      <!-- Card 2 -->
      <div class="testimonial-card">
        <h3>Nom de la personne 2</h3>
        <div class="stars">★★★★★</div>
        <p>Texte de l'avis 2.</p>
      </div>
  
      <!-- Card 3 -->
      <div class="testimonial-card">
        <h3>Nom de la personne 3</h3>
        <div class="stars">★★★★★</div>
        <p>Texte de l'avis 3.</p>
      </div>
  
      <!-- Ajoutez plus de testimonial-cards ici -->
    </div>
  </section>
  
  
  <?php 
include 'partials/footer.php'
?>
