<?php 
include 'partials/header.php';


$query = "SELECT * FROM contact ";

$contacts = mysqli_query($connection, $query );


?>


        <?php if(isset($_SESSION['delete-contact-success'])) : // shows if add user was sucessful?>
        <div class="alert__message-succes">
            <p>
                <?=$_SESSION['delete-contact-success'] ;
                unset($_SESSION['delete-contact-success']);?>
            </p>
        </div>
        <?php endif ?>

<section class="dashboard">
    <h2>Voici vos message </h2>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Objet</th>
                    <th>Nom Prénom</th>
                    <th>Téléphone</th>
                    <th>email</th>
                    <th>message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php while($contact = mysqli_fetch_assoc($contacts)) :  ?>
                <tr>
                    <td><?="{$contact['objet']}"?></td>
                    <td><?="{$contact['nom']}"?></td>
                    <td><?="{$contact['telephone']}"?></td>
                    <td><?= "{$contact['email']}" ?></td>
                    <td><?= "{$contact['message']}" ?></td>
                    <td>
                       
                        <a href="<?= ROOT_URL ?>admin/supprimer-contact.php?id=<?= $contact['id']?>"><button class="delete-btn">Supprimer</button></a>
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