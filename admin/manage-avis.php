<?php 
include 'partials/header.php';


$query = "SELECT * FROM avis ";

$avis_all = mysqli_query($connection, $query );


?>

<?php if(isset($_SESSION['publie-avis-success'])) : // shows if add user was sucessful?>
        <div class="alert__message-succes">
            <p>
                <?=$_SESSION['publie-avis-success'] ;
                unset($_SESSION['publie-avis-success']);?>
            </p>
        </div>
        <?php endif ?>
        <?php if(isset($_SESSION['delete-avis-success'])) : // shows if add user was sucessful?>
        <div class="alert__message-succes">
            <p>
                <?=$_SESSION['delete-avis-success'] ;
                unset($_SESSION['delete-avis-success']);?>
            </p>
        </div>
        <?php endif ?>

<section class="dashboard">
    <h2>Tableau de Bord - Avis</h2>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Note</th>
                    <th>avis</th>
                    <th>Publier</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php while($avis = mysqli_fetch_assoc($avis_all)) :  ?>
                <tr>
                    <td><?="{$avis['nom']}"?></td>
                    <td><?="{$avis['note']}"?></td>
                    <td><?="{$avis['avis']}"?></td>
                    <td><?php if($avis['publication']==1) : ?>
                        Oui
                        <?php else : ?>
                        Non
                        <?php endif ?>
                    </td>
                    <td>
                        <a href="<?= ROOT_URL ?>admin/publier.php?id=<?= $avis['id']?>"><button class="edit-btn">Publier</button></a>
                        <a href="<?= ROOT_URL ?>admin/supprimer-avis.php?id=<?= $avis['id']?>"><button class="delete-btn">Supprimer</button></a>
                    </td>
                </tr>
                <?php endwhile?>
                <!-- Ajouter d'autres lignes de voitures ici -->
            </tbody>
        </table>
    </div>
</section>




 <!-----------DEBUT DU FOOTER  ---------------->
 <?php 
include 'partials/footer.php';
?>