<?php 
include 'partials/header.php';
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
                <tr>
                    <td>Toyota Corolla</td>
                    <td>50,000 km</td>
                    <td>15,000 €</td>
                    <td>
                        <button class="edit-btn">Editer</button>
                        <button class="delete-btn">Supprimer</button>
                    </td>
                </tr>
                <!-- Ajouter d'autres lignes de voitures ici -->
            </tbody>
        </table>
    </div>
</section>




<?php 
include 'partials/footer.php';
?>
 




                   
     