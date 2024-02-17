<?php 
include 'partials/header.php'
?>



<?php if(isset($_SESSION['add-avis-error'])) : // shows if add avis was unsucessful?>
        <div class="alert__message-error">
            <p>
                <?=$_SESSION['add-avis-error'] ;
                unset($_SESSION['add-avis-error']);?>
            </p>
        </div>
        <?php endif ?>

<section class="reviews-section">
    <div class="container">
        <h2>Donnez votre avis</h2>
        <form class="review-form" action="avis-logic.php" method="POST">
            <div class="form-group">
                <label for="rating">Note (de 1 à 5 étoiles) :</label>
                <input type="number" id="rating" name="rating" min="1" max="5" required>
            </div>
            <div class="form-group">
                <label for="review">Votre avis :</label>
                <textarea id="review" name="review" required></textarea>
            </div>
            <div class="form-group">
                <label for="name">Votre nom :</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Votre adresse e-mail :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit" name="submit">Envoyer</button>
        </form>
    </div>
</section>


<?php 
include 'partials/footer.php'
?>
