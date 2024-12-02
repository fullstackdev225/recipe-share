<?php 

function dbConnect(){
    try{
        $database = new PDO('mysql:host=localhost;dbname=recipe_share;charset=utf8', 'root', 'root');

        return $database;
    }
     catch(Exception $e){
        die('Erreur de connexion à la base de donnée '.$e->getMessage());
     }
}