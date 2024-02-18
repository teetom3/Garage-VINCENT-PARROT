<?php 
include 'partials/header.php';



$query = "SELECT * FROM voitures ";

$voitures = mysqli_query($connection, $query );

?>




<section class="dashboard">
    <h2>Tableau de Bord - Véhicules en Vente</h2> <a href="<?=ROOT_URL?>admin/add-vehicule.php"><button class="add-users">Ajouter un vehicule</button></a>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Modèle</th>
                    <th>Kilométrage</th>
                    <th>Prix</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php while($voiture = mysqli_fetch_assoc($voitures)) : ?>
                <tr>
                    <td><?=$voiture['marque_modele']?></td>
                    <td><?=$voiture['kilometrage']?></td>
                    <td><?=$voiture['prix']?>€</td>
                    <td>
                        
                        <a href="<?= ROOT_URL ?>admin/delete-vehicule.php?id=<?= $voiture['id']?>"><button class="delete-btn">Supprimer</button></a>
                    </td>
                </tr>
                <?php endwhile?>
                <!-- Ajouter d'autres lignes de voitures ici -->
            </tbody>
        </table>
    </div>
</section>




<?php 
include 'partials/footer.php';
?>
 




                   
     