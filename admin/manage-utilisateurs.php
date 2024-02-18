<?php 
include 'partials/header.php';

//fetch users from database but not current user 



$query = "SELECT * FROM users ";

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
        <?php elseif(isset($_SESSION['delete-user-success'])) : // shows if add user was sucessful?>
        <div class="alert__message-succes">
            <p>
                <?=$_SESSION['delete-user-success'] ;
                unset($_SESSION['delete-user-success']);?>
            </p>
        </div>
        <?php endif ?>
    <h2>Tableau de Bord - Utilisateurs</h2> <a href="<?=ROOT_URL?>admin/add-users.php"><button class="add-users">Ajouter Utilisateurs</button></a>
    
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
                        
                    <a href="<?= ROOT_URL ?>admin/delete-user.php?id=<?= $user['id']?>"><button class="delete-btn">Supprimer</button></a>
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
 
 




                   
     