<?php

function databaseConnection(){
    try{
        $db = new PDO('mysql:host=localhost;dbname=recipe_share;charset=utf8', 'root', '');

        return $db;
    }
     catch(Exception $e){
        die('Echec de connexion '.$e->getMessage());
     }
}

function ifEmailExists(string $email){
    $database = databaseConnection();

    $request = $database->prepare("SELECT email FROM users WHERE email = ?");
    $request->execute([$email]);
    $result = $request->fetch();

    $emails = array($result["email"]);

    if(in_array($email, $emails)){
        return true;
    }
     
    return false;
}

function ifUsernameExists(string $username){
    $database = databaseConnection();

    $request = $database->prepare("SELECT username FROM users WHERE username = ?");
    $request->execute([$username]);
    $result = $request->fetch();

    $users = array($result["username"]);

    if(in_array($username, $users)){
        return true;
    }
     
    return false;
}

function insertData(string $lastName, string $firstName, string $email, string $username, string $password){
    $database = databaseConnection();

    $request = $database->prepare("INSERT INTO users(last_name, first_name, email, username, pass)
                                 VALUES(?, ?, ?, ?, ?)");
    $request->execute([$lastName, $firstName, $email, $username, $password]);
}

function userLogged(string $username, string $password){
    $database = databaseConnection();

    $request = $database->prepare("SELECT pass FROM users WHERE username = ?");
    $request->execute([$username]);
    $result = $request->fetch();

    $passwordCorrect = password_verify($password, $result["pass"]);

    if(!$result){
        echo '<div class="alert alert-danger">
                    Identifiants incorrect
                    <button class="btn-close" data-bs-dismiss="alert"></button>
                </div>';
    }
     else{
        if($passwordCorrect){
            $_SESSION["username"] = $username;
            header('Location: home.php');
        }
         else{
             echo '<div class="alert alert-danger">
                        Identifiants incorrect
                        <button class="btn-close" data-bs-dismiss="alert"></button>
                    </div>';
         }
     }
}


function userLoggedHome(string $username, string $password){
    $database = databaseConnection();

    $request = $database->prepare("SELECT pass FROM users WHERE username = ?");
    $request->execute([$username]);
    $result = $request->fetch();

    $passwordCorrect = password_verify($password, $result["pass"]);

    if(!$result){
       header('Location: login.php');
    }
     else{
        if($passwordCorrect){
            $_SESSION["username"] = $username;
        }
         else{
            header('Location: login.php');
         }
     }
}