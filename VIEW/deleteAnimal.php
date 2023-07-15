<?php
    require_once "DB/animalDB.php";

    $id = $_GET['id'];
    
    deleteAnimalById($id);
    header('Location: ?page=listAnimals');
?>