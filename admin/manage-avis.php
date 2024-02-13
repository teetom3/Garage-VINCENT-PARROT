<?php 
include 'partials/header.php';
?>

<section class="dashboard">
    <h2>Tableau de Bord - Avis</h2>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Note</th>
                    <th>avis</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jean DUJARDIN</td>
                    <td>5</td>
                    <td>Excelent travail</td>
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




 <!-----------DEBUT DU FOOTER  ---------------->
 <?php 
include 'partials/footer.php';
?>