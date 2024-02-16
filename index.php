<?php 
include 'partials/header.php';


$query_voitures = "SELECT * FROM voitures ";

$voitures = mysqli_query($connection, $query_voitures );

$query_services ="SELECT * FROM services";

$services = mysqli_query($connection, $query_services);


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
  <?php while($service = mysqli_fetch_assoc($services)) : ?>
    <div class="service-card">
      <img src="./images/<?=$service['image']?>" alt="Réparation mécanique">
      <h2><?=$service['service']?></h2>
      <p><?=$service['description']?></p>
    </div>
    
    <?php endwhile ?>
  </section>
  
<!---SECTION VEHICULES -------------------------------------->


  <section class="vehicle-sales-banner">
    <h2>Vente de véhicules d'occasion</h2>
  </section>
  
  <section class="vehicle-sales">
  <?php while($voiture = mysqli_fetch_assoc($voitures)) : ?>
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
