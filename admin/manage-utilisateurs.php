<?php 
include 'partials/header.php';
?>

<section class="dashboard">
    <h2>Tableau de Bord - Utilisateurs</h2> <button class="add-users">Ajouter un Utilisateur</button>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse e-mail</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>DUJARDIN</td>
                    <td>Jean</td>
                    <td>jean@dujardin.fr/td>
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
 
 




                   
     