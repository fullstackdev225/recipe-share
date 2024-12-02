<?php

require_once('../databaseConnection.php');

function ifEmailExists(string $email){
    //we connect to database...
    $database = dbConnect();

    //we getting email...
    $request = $database->prepare("SELECT email FROM users WHERE email = :email");
    $request->execute([
        ':email' => $email
    ]);
    $result = $request->fetch();

    //we store email in the table...
    $emails = array($result["email"]);

    //we verify if email exists...
    if(in_array($email, $emails)){
        return true;
    }

    return false;
}


function ifUsernameExists(string $username){
    //we connect to database...
    $database = dbConnect();

    //we getting username...
    $request = $database->prepare("SELECT username FROM users WHERE username = :username");
    $request->execute([
        ':username' => $username
    ]);
    $result = $request->fetch();

    //we store username in the table...
    $users = array($result["username"]);

    //we verify if username exists...
    if(in_array($username, $users)){
        return true;
    }

    return false;
}


function insertData(string $lastName, string $firstName, string $email, string $username, string $password){
    //we connect to database...
    $database = dbConnect();

    //we insert user informations...
    $request = $database->prepare('INSERT INTO users(last_name, first_name, email, username, passwrd)
                                  VALUES(?, ?, ?, ?, ?)');
    $request->execute([$lastName, $firstName, $email, $username, $password]);
}