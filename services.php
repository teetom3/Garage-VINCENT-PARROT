<?php 
include 'partials/header.php';

$query_services ="SELECT * FROM services";

$services = mysqli_query($connection, $query_services);

?>


<!---SECTION SERVICES -------------------------------------->

<section class="services-banner">
    <h2>NOS SERVICES</h2>
  </section>
  

  
  <section class="services">
  <?php while($service = mysqli_fetch_assoc($services)) : ?>
    <div class="service-card">
      <a href="<?= ROOT_URL ?>service-single.php?id=<?= $service['id']?>"><img src="./images/<?=$service['image']?>" alt="Réparation mécanique"></a>
      <h2><?=$service['service']?></h2>
      <p><?=$service['description']?></p>
    </div>
    
    <?php endwhile ?>
  </section>
  
  



  <?php 
include 'partials/footer.php'
?>
