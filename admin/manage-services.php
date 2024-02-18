<?php 
include 'partials/header.php';

$query = "SELECT * FROM services ";

$services = mysqli_query($connection, $query );
?>

<section class="dashboard">
<?php if(isset($_SESSION['add-services-success'])) : // shows if add service was sucessful?>
        <div class="alert__message-succes">
            <p>
                <?=$_SESSION['add-services-success'] ;
                unset($_SESSION['add-services-success']);?>
            </p>
        </div>
        <?php elseif(isset($_SESSION['delete-service-success'])) :?>
            <div class="alert__message-succes">
            <p>
                <?=$_SESSION['delete-service-success'] ;
                unset($_SESSION['delete-service-success']);?>
            </p>
        </div>
        <?php endif ?>
    <h2>Tableau de Bord - Services</h2> <a href="<?=ROOT_URL?>admin/add-service.php"><button >Ajouter un services</button></a>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Services</th>
                    <th>Sous-titre</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php while($service = mysqli_fetch_assoc($services)) :  ?>
                <tr>
                    <td><?="{$service['service']}"?></td>
                    <td><?="{$service['sous_titre']}"?></td>
                    <td><?="{$service['description']}"?></td>
                    <td>
                       
                    <a href="<?= ROOT_URL ?>admin/delete-service.php?id=<?= $service['id']?>"><button class="delete-btn">Supprimer</button></a>
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