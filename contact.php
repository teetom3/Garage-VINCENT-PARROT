<?php 
include 'partials/header.php';

if(isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM voitures WHERE id=$id";
    $query_result = mysqli_query($connection,$query);
    $voiture_single = mysqli_fetch_array($query_result);
     
}

?>


<!----Formulaire de contact -->

<section class="contact-form">
  <h2>Contactez-nous</h2>
  <form action="contact-logic.php" method="POST">
      <div class="form-group">
          <label for="objet">Objet du contact :</label>
          <input type="text" id="objet" name="objet" value="<?php echo isset($_GET['id']) ? $voiture_single['marque_modele'] : ''; ?>" placeholder="Entrez l'objet de votre message" required>
      </div>
      <div class="form-group">
          <label for="nom">Nom :</label>
          <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
      </div>
      <div class="form-group">
          <label for="nom">Prénom :</label>
          <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
      </div>
      
      <div class="form-group">
          <label for="telephone">Téléphone:</label>
          <input type="text" id="telephone" name="telephone" placeholder="Entrez votre numéro de téléphone" required>
      </div>
      <div class="form-group">
          <label for="email">Adresse e-mail :</label>
          <input type="email" id="email" name="email" placeholder="Entrez votre adresse e-mail" required>
      </div>
      <div class="form-group">
          <label for="message">Votre message :</label>
          <textarea id="message" name="message" placeholder="Écrivez votre message ici" required></textarea>
      </div>
      <button type="submit" name="submit">Envoyer</button>
  </form>
</section>




  
<?php 
include 'partials/footer.php'
?>















