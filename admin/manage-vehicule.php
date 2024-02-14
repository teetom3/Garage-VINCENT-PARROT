<?php 
include 'partials/header.php';



$query = "SELECT * FROM voitures ";

$voitures = mysqli_query($connection, $query );

?>




<section class="dashboard">
    <h2>Tableau de Bord - Véhicules en Vente</h2> <button class="add-users">Ajouter un vehicule</button>
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
                        <button class="edit-btn">Editer</button>
                        <button class="delete-btn">Supprimer</button>
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
 




                   
     