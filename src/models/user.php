<?php 

require_once('../databaseConnection.php');

function getUserInformations(string $username){
    //we connect to database...
    $database = dbConnect();

    //we getting user informations...
    $request = $database->prepare('SELECT last_name, first_name, email FROM users WHERE username = ?');
    $request->execute([$username]);
    $result = $request->fetchAll();

    return $result;
}

function getUserId(string $username){
    //we connect to database...
    $database = dbConnect();

    //we getting user id...
    $request = $database->prepare('SELECT id FROM users WHERE username = ?');
    $request->execute([$username]);
    $result = $request->fetch();

    return $result["id"];
}