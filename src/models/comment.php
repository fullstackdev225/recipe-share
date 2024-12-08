<?php

require_once('../databaseConnection.php');

function addComment(string $comment, int $userId, int $recipeId){
    //we connect to database...
    $database = dbConnect();

    //we add user comment...
    $request = $database->prepare('INSERT INTO comments(user_comment, user_id, recipe_id) VALUES(?, ?, ?)');
    $request->execute([$comment, $userId, $recipeId]);
}