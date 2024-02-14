<?php 
include 'partials/header.php';

//fetch users from database but not current user 

$current_admin_id = $_SESSION['user-id'];

$query = "SELECT * FROM users WHERE NOT id=$current_admin_id";

$users = mysqli_query($connection, $query );

?>

<section class="dashboard">
<?php if(isset($_SESSION['add-user-success'])) : // shows if add user was sucessful?>
        <div class="alert__message-succes">
            <p>
                <?=$_SESSION['add-user-success'] ;
                unset($_SESSION['add-user-success']);?>
            </p>
        </div>
        <?php endif ?>
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
            <?php while($user = mysqli_fetch_assoc($users)) :  ?>
                <tr>
                    <td><?="{$user['lastname']}"?></td>
                    <td><?="{$user['firstname']}"?></td>
                    <td><?="{$user['email']}"?></td>
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
 
 




                   
     