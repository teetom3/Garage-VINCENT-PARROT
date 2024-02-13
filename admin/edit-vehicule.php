<?php 
include 'partials/header.php';
?>
    <!-------------Fin de la nav-->







<h2>Modifier un véhicule</h2>

<form class="formulaire" action="ajouter_vehicule.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="modele">Modèle :</label>
        <input type="text" id="modele" name="modele" required>
    </div>
    <div class="form-group">
        <label for="marque">Marque :</label>
        <input type="text" id="marque" name="marque" required>
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
        <label for="photos">Ajouter des photos :</label>
        <input type="file" id="photos" name="photos[]" accept="image/*" multiple>
    </div>
    <button type="submit">Ajouter</button>
</form>


<?php 
include 'partials/footer.php';
?>