<?php 
include 'partials/header.php'
?>


<div class="login-container">
    <form class="login-form">
        <h2>Connexion</h2>
        <div class="input-group">
            <label for="username">Nom d'utilisateur ou email</label>
            <input type="text" id="username" name="username" placeholder="Entrez votre nom d'utilisateur ou email" required>
        </div>
        <div class="input-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
        </div>
        <button type="submit">Connexion</button>
    </form>
</div>



  
  
  
  
<?php 
include 'partials/footer.php'
?>
