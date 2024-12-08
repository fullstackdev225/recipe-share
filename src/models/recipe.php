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
     $request = $database->prepare('SELECT id, title, author, img FROM recipes');
     $request->execute();
     $result = $request->fetchAll();

     return $result;
}


function getRecipe(int $userId){
     //we connect to database...
     $database = dbConnect();

     //we getting user recipes...
     $request = $database->prepare('SELECT id, title, author, img FROM recipes WHERE user_id = ?');
     $request->execute([$userId]);
     $result = $request->fetchAll();

     return $result;
}


function updateRecipe(string $title, string $description, string $author, string $image, int $id){
    //we connect to database...
    $database = dbConnect();

    //we modifiy recipe...
    $request = $database->prepare('UPDATE recipes SET title = ?, details = ?, author = ?, img = ? WHERE id = ?');
    $request->execute([$title, $description, $author, $image, $id]);
}


function getRecipes(int $recipeId){
     //we connect to database...
     $database = dbConnect();

     //we getting recipes...
     $request = $database->prepare("SELECT title, details, author, img FROM recipes WHERE id = ?");
     $request->execute([$recipeId]);
     $result = $request->fetchAll();

     return $result;
}

function deleteRecipe(int $recipeId){
     //we connect to database...
     $database = dbConnect();

     //we delete recipe...
     $request = $database->prepare('DELETE FROM recipes WHERE id = ?');
     $request->execute([$recipeId]);
}