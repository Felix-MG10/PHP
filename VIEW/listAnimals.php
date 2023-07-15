<?php
    require_once 'DB/animalDB.php';
    $animal = getAnimaux();
    if(isset($_POST['delete'])){
        deleteAnimalById($id);
    }
?>

<div class="container mt-5 col-6 ">
    <div class="card">
        <div class="card-header">
            <h2>Liste des personne</h2>
        </div>
        <div class="card-body">
        <table class="table table-hover">
                <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Age</th>
                    <th>Sexe</th>
                    <th>Option</th>
                </tr>
                <?php foreach($animal as $key){?>
                    <tr style="color:<?=$key['couleur']?>;">
                        <td><?= $key['matricule']?></td>
                        <td><?= $key['nom']?></td>
                        <td><?= $key['age']?></td>
                        <td><?= $key['sexe']?></td>
                        <td>
                            <a href="?page=editAnimals&id=<?=$key['id']?>" name="update" class="btn btn-outline-success">Edit</a>
                            <a href="?page=deleteAnimal&id=<?=$key['id']?>" name="delete" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                <?php }?>
            </table>
            <a href="?page=addAnimal" name="add" class="btn btn-outline-primary">Ajouter</a>
        </div>
    </div>
</div>