<?php 

function dbConnect(){
    try{
        $database = new PDO('mysql:host=localhost;dbname=recipe_share;charset=utf8', 'root', 'root');

        return $database;
    }
     catch(Exception $e){
        die('Erreur de connexion '.$e->getMessage());
     }
}

function ifEmailExists(string $email){
    //we connect to database...
    $database = dbConnect();

    //we getting email in the database...
    $request = $database->prepare('SELECT user_email FROM users WHERE user_email = ?');
    $request->execute([$email]);
    $result = $request->fetch();

    //we compare email...
    $emails = array($result["user_email"]);

    if(in_array($email, $emails)){
        return true;
    }

    return false;
}

function ifUsernameExists(string $username){
    //we connect to database...
    $database = dbConnect();

    //we getting username in database...
    $request = $database->prepare('SELECT username FROM users WHERE username = ?');
    $request->execute([$username]);
    $result = $request->fetch();

    //we compare username...
    $users = array($result["username"]);

    if(in_array($username, $users)){
        return true;
    }

    return false;
}


function insertData(string $lastName, string $firstName, string $email, string $username, string $password){
    //we connect to database...
    $database = dbConnect();

    //we store informations in the database...
    $request = $database->prepare('INSERT INTO users(user_lastname, user_firstname, user_email, username, user_password)
                                 VALUE(?, ?, ?, ?, ?)');
    $request->execute([$lastName, $firstName, $email, $username, $password]);
    header('Location: login.php');
}


function login_auth(string $username, string $password){
    //we connect to database...
    $database = dbConnect();

    //we getting password...
    $request = $database->prepare('SELECT user_password FROM users WHERE username = ?');
    $request->execute([$username]);
    $result = $request->fetch();

    //we compare password...
    $passwordCorrect = password_verify($password, $result["user_password"]);

    if(!$result){
        echo '<div class="alert alert-danger alert-dismissible">
                    Identifiants incorrects
                     <button class="btn-close" data-bs-dismiss="alert"></button>
              </div>';
    }
     else{
        if($passwordCorrect){
            $_SESSION["username"] = $username;
            header('Location: home.php');
        }
         else{
            echo '<div class="alert alert-danger alert-dismissible">
                        Identifiants incorrects
                        <button class="btn-close" data-bs-dismiss="alert"></button>
                  </div>';
         }
     }
}


function home_auth(string $username, string $password){
    //we connect to database...
    $database = dbConnect();

    //we getting password...
    $request = $database->prepare('SELECT user_password FROM users WHERE username = ?');
    $request->execute([$username]);
    $result = $request->fetch();

    //we compare password...
    $passwordCorrect = password_verify($password, $result["user_password"]);

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