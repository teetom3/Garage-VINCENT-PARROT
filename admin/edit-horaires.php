<?php 
include 'partials/header.php';


$sql = "SELECT jour_semaine, description FROM horaires";
$result = $connection->query($sql);

// Créer un tableau associatif pour stocker les descriptions par jour
$horaires = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $horaires[$row['jour_semaine']] = $row['description'];
    }
}

// Fermer la connexion à la base de données

?>



<!-------------Fin de la nav-->

<?php if(isset($_SESSION['add-horaires-success'])) : // shows if add user was sucessful?>
        <div class="alert__message-succes">
            <p>
                <?=$_SESSION['add-horaires-success'] ;
                unset($_SESSION['add-horaires-success']);?>
            </p>
        </div>
        <?php endif ?>

        <h2>Formulaire pour les horaires</h2>
        
<form class="formulaire" action="edit-horaires-logic.php" method="POST">
    <label for="lundi">Lundi:</label><br>
    <textarea id="lundi" name="lundi" rows="4" cols="50"><?php echo isset($horaires['Lundi']) ? $horaires['Lundi'] : ''; ?></textarea><br><br>

    <label for="mardi">Mardi:</label><br>
    <textarea id="mardi" name="mardi" rows="4" cols="50"><?php echo isset($horaires['Mardi']) ? $horaires['Mardi'] : ''; ?></textarea><br><br>

    <label for="mercredi">Mercredi:</label><br>
    <textarea id="mercredi" name="mercredi" rows="4" cols="50"><?php echo isset($horaires['Mercredi']) ? $horaires['Mercredi'] : ''; ?></textarea><br><br>

    <label for="jeudi">Jeudi:</label><br>
    <textarea id="jeudi" name="jeudi" rows="4" cols="50"><?php echo isset($horaires['Jeudi']) ? $horaires['Jeudi'] : ''; ?></textarea><br><br>

    <label for="vendredi">Vendredi:</label><br>
    <textarea id="vendredi" name="vendredi" rows="4" cols="50"><?php echo isset($horaires['Vendredi']) ? $horaires['Vendredi'] : ''; ?></textarea><br><br>

    <label for="samedi">Samedi:</label><br>
    <textarea id="samedi" name="samedi" rows="4" cols="50"><?php echo isset($horaires['Samedi']) ? $horaires['Samedi'] : ''; ?></textarea><br><br>

    <label for="dimanche">Dimanche:</label><br>
    <textarea id="dimanche" name="dimanche" rows="4" cols="50"><?php echo isset($horaires['Dimanche']) ? $horaires['Dimanche'] : ''; ?></textarea><br><br>

    <input type="submit" name="submit" value="Soumettre">
</form>




<?php 
include 'partials/footer.php';
?>