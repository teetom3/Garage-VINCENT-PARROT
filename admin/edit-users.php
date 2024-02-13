<?php 
include 'partials/header.php';
?>
    
    <!-------------Fin de la nav-->

<h2>Editer un utilisateur</h2>  

    <form class="formulaire" action="ajouter_utilisateur.php" method="POST">
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="lastname" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="firstname" required>
        </div>
        <div class="form-group">
            <label for="email">Adresse email :</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="motdepasse">Mot de passe :</label>
            <input type="password" id="motdepasse" name="password" required>
        </div>
        <button type="submit" name="submit">Ajouter</button>
    </form>



    <?php 
include 'partials/footer.php';
?>