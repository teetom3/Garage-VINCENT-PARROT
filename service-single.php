<?php 
include 'partials/header.php';

if(isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM services WHERE id=$id";
    $query_result = mysqli_query($connection,$query);
    $service_single = mysqli_fetch_array($query_result);
     
}
?>

<div class="voiture_single">
<a href="<?= ROOT_URL ?>service-single.php?id=<?= $service_single['id']?>"><img src="./images/<?=$service_single['image']?>" alt="Voiture d'occasion"></a>
      
     <div class="information">
     
     <h3><?=$service_single['service']?></h3>
      <p> <?=$service_single['sous_titre']?></p>
      <p><?=$service_single['description']?></p>
      
      </div>
      
</div>
<?php 
include 'partials/footer.php'
?>

