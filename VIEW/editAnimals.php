<?php
    require_once "DB/animalDB.php";

    $id = $_GET['id'];
    $animal = getAnimalById($id);
    echo("<pre>");
    print_r($animal);
    echo("<pre>");    
    if(isset($_POST['edition'])){
        extract($_POST);
        $matricule = $age.substr($nom,0,1).substr($couleur,-1);
        updateAnimalById($id,$matricule,$nom,$age,$sexe,$couleur);
        header("location: ?page=listAnimals");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-5 col-6">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Liste des animaux</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">

                    <label for="">Nom</label>
                    <input type="text" name="nom" id="age" class="form-control" value="<?=$animal['nom']?>"><br>

                    <label for="">Age</label>
                    <input type="number" name="age" id="age" class="form-control" value="<?=$animal['age']?>"><br>

                    <label for="">Sexe</label>
                    <select name="sexe" id="sexe" class="form-control">
                        <option value=""><?=$animal['sexe']?></option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                    </select><br>

                    <label for="">Couleur</label>
                    <select name="couleur" id="couleur" class="form-control">
                        <option value=""><?=$animal['couleur']?></option>
                        <option value="red">Rouge</option>
                        <option value="green">vert</option>
                    </select><br>

                    <div class="row">
                        <div class="col"> 
                            <input type="reset" value="Annuler" class="btn btn-danger" name="reset" > 
                        </div>
                        <div class="col">
                            <input type="submit" value="Edition" class="btn btn-primary" name="edition">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>