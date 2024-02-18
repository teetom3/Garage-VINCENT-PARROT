<?php 
include 'partials/header.php';

if(isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM voitures WHERE id=$id";
    $query_result = mysqli_query($connection,$query);
    $voiture_single = mysqli_fetch_array($query_result);
     
}
?>

<div class="voiture_single">

      <a href="<?= ROOT_URL ?>vehicule-single.php?id=<?= $voiture_single['id']?>"><img src="./images/<?=$voiture_single['image']?>" alt="Voiture d'occasion"></a>
     <div class="information">
     <h3><?=$voiture_single['marque_modele']?></h3>
      <p><b>Prix:</b> <?=$voiture_single['prix']?>€</p>
      <p><b>Kilométrage:</b> <?=$voiture_single['kilometrage']?>km</p>
      <p><b>Année de mise en circulation :</b> <?=$voiture_single['annee']?></p>
      <p> <?=$voiture_single['description']?></p>
      <a href="<?= ROOT_URL ?>contact.php?id=<?= $voiture_single['id']?>"><button class="contact ">CONTACTEZ NOUS</button></a>
</div>
      
</div>
<?php 
include 'partials/footer.php'
?>

