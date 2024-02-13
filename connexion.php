<?php 
include 'partials/header.php'
?>


<div class="login-container">
    <form class="login-form" action="<?ROOT_URL?>signin-logic.php" method="POST">
        <h2>Connexion</h2>
        <div class="input-group">
            <label for="username">Email</label>
            <input type="text" id="username" name="email" placeholder="Entrez votre email" required>
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
