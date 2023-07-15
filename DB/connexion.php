<?php
    $host = "localhost";
    $dbname = "examen";
    $user = "root";
    $password = "";
    try{
        $db = new PDO("mysql:host=$host; dbname=$dbname", $user, $password);
    }catch(Exception $e){
        $e->getmessage();
        include_once "../erreur.php";
    }
?>