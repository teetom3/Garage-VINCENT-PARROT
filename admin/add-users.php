<?php 
include 'partials/header.php';
?>

<h2>Ajouter un utilisateur</h2>  

    <form class="formulaire" action="<?=ROOT_URL?>admin/add-user-logic.php" method="POST">
        <div class="form-group">
            <label for="nom">Prénom:</label>
            <input type="text" id="nom" name="firstname" required>
        </div>
        <div class="form-group">
            <label for="prenom">Nom :</label>
            <input type="text" id="nom" name="lastname" required>
        </div>
        <div class="form-group">
            <label for="email">Adresse email :</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="motdepasse">Mot de passe :</label>
            <input type="password" id="motdepasse" name="createpassword" required>
        </div>
       
        <button type="submit" name="submit">Ajouter</button>
    </form>



    <?php 
include 'partials/footer.php';
?>