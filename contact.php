<?php 
include 'partials/header.php'
?>


<!----Formulaire de contact -->

<section class="contact-form">
  <h2>Contactez-nous</h2>
  <form action="#" method="POST">
      <div class="form-group">
          <label for="subject">Objet du contact :</label>
          <input type="text" id="subject" name="subject" placeholder="Entrez l'objet de votre message" required>
      </div>
      <div class="form-group">
          <label for="email">Adresse e-mail :</label>
          <input type="email" id="email" name="email" placeholder="Entrez votre adresse e-mail" required>
      </div>
      <div class="form-group">
          <label for="message">Votre message :</label>
          <textarea id="message" name="message" placeholder="Écrivez votre message ici" required></textarea>
      </div>
      <button type="submit">Envoyer</button>
  </form>
</section>




  
<?php 
include 'partials/footer.php'
?>















