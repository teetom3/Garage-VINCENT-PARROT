<?php 
include 'partials/header.php';


$query_voitures = "SELECT * FROM voitures ";

$voitures = mysqli_query($connection, $query_voitures );

$query_services ="SELECT * FROM services";

$services = mysqli_query($connection, $query_services);


$query_avis ="SELECT * FROM avis WHERE publication = 1";

$avis_publie = mysqli_query($connection,$query_avis);

?>


<?php if(isset($_SESSION['add-avis-success'])) : // shows if add avis was sucessful?>
        <div class="alert__message-succes">
            <p>
                <?=$_SESSION['add-avis-success'] ;
                unset($_SESSION['add-avis-success']);?>
            </p>
        </div>
        <?php endif ?>


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
    <div class="service-card">
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


<div class="services-banner">
      <h2>VOS AVIS COMPTENT POUR NOUS</h2>
    </div>

    <section class="testimonial-section">
    <div class="testimonial-cards">
    <?php while($avis = mysqli_fetch_assoc($avis_publie)) : ?>
      <div class="testimonial-card">
        <h3><?=$avis['nom']?></h3>
        <?php
// Note de l'avis (à remplacer par la note récupérée de la base de données)
$note = $avis['note']; // Exemple de note

// Générer les étoiles en HTML en fonction de la note
$stars_html = '';
for ($i = 1; $i <= 5; $i++) {
    if ($i <= $note) {
        $stars_html .= '★'; // Étoile pleine
    } else {
        $stars_html .= '☆'; // Étoile vide
    }
}

// Afficher les étoiles
echo '<div class="stars">' . $stars_html . '</div>';
?>
        
        <p><?=$avis['avis']?>.</p>
      </div>
      <?php endwhile ?>
     
  </section>
  
  
  <?php 
include 'partials/footer.php'
?>
