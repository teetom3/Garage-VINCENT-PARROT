<?php 
include 'partials/header.php';
?>


<h2>Ajouter un services</h2>

<form class="formulaire" action="<?=ROOT_URL?>admin/add-service-logic.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="service">Nom du service</label>
        <input type="text" id="service" name="service" required>
    </div>
    <div class="form-group">
        <label for="sous_titre">Sous-titre</label>
        <input type="text" id="sous_titre" name="sous_titre" required>
    </div>
    
    <div class="form-group">
        <label for="description">Description précise :</label>
        <textarea id="description" name="description" rows="4" required></textarea>
    </div>
    <div class="form-group">
        <label for="photo">Ajouter une photo :</label>
        <input type="file" id="photos" name="image" >
    </div>
    <button type="submit" name="submit">Ajouter</button>
</form>


<?php 
include 'partials/footer.php';
?>