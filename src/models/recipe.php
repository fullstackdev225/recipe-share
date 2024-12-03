<?php 

require_once('../databaseConnection.php');

function addRecipe(string $title, string $description, string $author, string $image, int $userId){
    //we connect to database...
    $database = dbConnect();

    //we add recipe...
    $request = $database->prepare('INSERT INTO recipes(title, details, author, img, user_id) VALUES(?, ?, ?, ?, ?)');
    $request->execute([$title, $description, $author, $image, $userId]);
}

function getAllRecipe(){
     //we connect to database...
     $database = dbConnect();

     //we getting recipes...
     $request = $database->prepare('SELECT title, details, author, img FROM recipes');
     $request->execute();
     $result = $request->fetchAll();

     return $result;
}


function getRecipe(int $userId){
     //we connect to database...
     $database = dbConnect();

     //we getting user recipes...
     $request = $database->prepare('SELECT title, details, author, img FROM recipes WHERE user_id = ?');
     $request->execute([$userId]);
     $result = $request->fetchAll();

     return $result;
}