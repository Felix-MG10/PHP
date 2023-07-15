<?php
    function getAnimaux(){
        global $db;
        $sql = "SELECT * FROM animal";
        return $db->query($sql)->fetchAll(2);
    }

    function addAnimal($matricule,$nom, $age,$sexe, $couleur){
        global $db;
        $sql = "INSERT INTO animal (matricule,nom,age,sexe,couleur) VALUES('$matricule','$nom',$age,'$sexe', '$couleur')";
        return $db->exec($sql);
    }

    function getAnimalById($id){
        global $db;
        $sql = "SELECT * from animal where id=$id ";
        return $db->query($sql)->fetch(2);
    }

    function updateAnimalById($id,$matricule,$nom, $age,$sexe,$couleur){
        global $db;
        $sql = "UPDATE animal SET matricule='$matricule',
        nom='$nom', age=$age, sexe='$sexe', couleur='$couleur'
        WHERE id=$id";
        return $db->exec($sql);
    }

    function deleteAnimalById($id){
        global $db;
        $sql = "DELETE FROM animal WHERE id=$id";
        return $db->exec($sql);
    }
?>