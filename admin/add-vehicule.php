<?php 
include 'partials/header.php';
?>






<h2>Ajouter un véhicule</h2>

<form class="formulaire" action="<?=ROOT_URL?>admin/add-vehicule-logic.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="modele">Marque et Modèle :</label>
        <input type="text" id="modele" name="marque_modele" required>
    </div>
    <div class="form-group">
        <label for="annee">Année de mise en circulation :</label>
        <input type="text" id="annee" name="annee" required>
    </div>
    <div class="form-group">
        <label for="kilometrage">Kilométrage :</label>
        <input type="text" id="kilometrage" name="kilometrage" required>
    </div>
    <div class="form-group">
        <label for="prix">Prix :</label>
        <input type="text" id="prix" name="prix" required>
    </div>
    <div class="form-group">
        <label for="description">Description précise :</label>
        <textarea id="description" name="description" rows="4" required></textarea>
    </div>
    <div class="form-group">
        <label for="photo">Ajouter des photos :</label>
        <input type="file" id="photos" name="image" >
    </div>
    <button type="submit" name="submit">Ajouter</button>
</form>


<?php 
include 'partials/footer.php';
?>