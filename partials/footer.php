 <!-----------DEBUT DU FOOTER  ---------------->

 <?php 
 
 $sql = "SELECT jour_semaine, description FROM horaires";
$result = $connection->query($sql);

// Créer un tableau associatif pour stocker les descriptions par jour
$horaires = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $horaires[$row['jour_semaine']] = $row['description'];
    }
}
 
 
 ?>
 <footer class="footer">
    <div class="container footer__container">

        <div class="opening-hours">
            <h4>Horaires d'ouverture</h4>
            <p>Lundi : <?=$horaires['Lundi']?></p>
            <p>Mardi : <?=$horaires['Mardi']?></p>
            <p>Mercredi:  <?=$horaires['Mercredi']?></p>
            <p>Jeudi :  <?=$horaires['Jeudi']?></p>
            <p>Vendredi : <?=$horaires['Vendredi']?></p>
            <p>Samedi : <?=$horaires['Samedi']?></p>
            <p>Dimanche: <?=$horaires['Dimanche']?></p>
          </div>

          
      <article>
        <h4>Services </h4>
        <ul>
          <li><a href="">Vidange</li>
          <li><a href="">Réparaiton mécanique</a></li>
          <li><a href="">Pneu</a></li>
          <li><a href="">Vente de véhicule d'occasion</a></li>
          
        </ul>
      </article>
      <article>
        <h4>Support </h4>
        <ul>
          <li><a href="">Online Support</a></li>
          <li><a href="">Call numbers</a></li>
          <li><a href="">E-mails</a></li>
          <li><a href="">Social Support</a></li>
          <li><a href="">Location</a></li>
        </ul>
      </article>
      
      <article>
        <h4>Permalinks</h4>
        <ul>
            <li><a href="#">Véhicules d'occasion</a></li>
            <li><a href="#">Nos services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Avis</a></li>
        </ul>
      </article>
    </div>
    <div class="footer__copyright">
      <small>Copyright &copy;,  GARAGE VINCENT PARROT  </small>
    </div>
  </footer>
  
  
  
  


    <script src="<?=ROOT_URL?>script.js"></script>
</body>
</html>
 