<?php 
include 'partials/header.php';
?>

<!-------------Fin de la nav-->



<form class="formulaire" action="horaires.php" method="POST">
    <div class="form-group">
        <label for="lundi">Lundi :</label>
        <input type="text" id="lundi" name="lundi">
    </div>
    <div class="form-group">
        <label for="mardi">Mardi :</label>
        <input type="text" id="mardi" name="mardi">
    </div>
    <div class="form-group">
        <label for="mercredi">Mercredi :</label>
        <input type="text" id="mercredi" name="mercredi">
    </div>
    <div class="form-group">
        <label for="jeudi">Jeudi :</label>
        <input type="text" id="jeudi" name="jeudi">
    </div>
    <div class="form-group">
        <label for="vendredi">Vendredi :</label>
        <input type="text" id="vendredi" name="vendredi">
    </div>
    <div class="form-group">
        <label for="samedi">Samedi :</label>
        <input type="text" id="samedi" name="samedi">
    </div>
    <div class="form-group">
        <label for="dimanche">Dimanche :</label>
        <input type="text" id="dimanche" name="dimanche">
    </div>
    <button type="submit">Envoyer</button>
</form>





<?php 
include 'partials/footer.php';
?>