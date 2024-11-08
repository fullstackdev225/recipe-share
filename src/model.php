<?php 

function db_connect(){
    try{
        $database = new PDO('mysql:host=localhost;dbname=recipe_share;charset=utf8', 'root', 'root');

        return $database;
    }
     catch(Exception $e){
         die('Erreur de connexion à la base de donnée '.$e->getMessage());
     }
}

function if_email_exists(string $email){
    //we connect to database...
    $database = db_connect();

    //we getting eventually user email...
    $request = $database->prepare('SELECT user_email FROM users WHERE user_email = ?');
    $request->execute([$email]);
    $result = $request->fetch();

    //we comapare emails...
    $emails = array($result["user_email"]);

    if(in_array($email, $emails)){
        return true;
    }

    return false;
}


function if_username_exists(string $username){
    //we connect to database...
    $database = db_connect();

    //we getting eventually username...
    $request = $database->prepare('SELECT username FROM users WHERE username = ?');
    $request->execute([$username]);
    $result = $request->fetch();

    //we comapare username...
    $users = array($result["username"]);

    if(in_array($username, $users)){
        return true;
    }

    return false;
}


function insert_data(string $last_name, string $first_name, string $email, string $username, string $password){
    //we connect to database...
    $database = db_connect();

    //we insert data in the database...
    $request = $database->prepare('INSERT INTO users(user_lastname, user_firstname, user_email, username, user_password)
                                   VALUES(?, ?, ?, ?, ?)');
    $request->execute([$last_name, $first_name, $email, $username, $password]);
}


function auth(string $username, string $password){
    //we connect to database...
    $database = db_connect();

    //we getting password...
    $request = $database->prepare('SELECT user_password FROM users WHERE username = ?');
    $request->execute([$username]);
    $result = $request->fetch();

    //we compare password...
    $password_correct = password_verify($password, $result["user_password"]);

    if(!$result){
         echo '<div class="alert alert-danger alert-dismissible">
                      Identifiants incorrects
                      <button class="btn-close" data-bs-dismiss="alert"></button>
                </div>';
    }
     else{
         if($password_correct){
             $_SESSION["username"] = $username;
             header("Location: home.php");
         }
          else{
            echo '<div class="alert alert-danger alert-dismissible">
                      Identifiants incorrects
                      <button class="btn-close" data-bs-dismiss="alert"></button>
                </div>';
          }
     }
}


function authentification(string $username, string $password){
    //we connect to database...
    $database = db_connect();

    //we getting password...
    $request = $database->prepare('SELECT user_password FROM users WHERE username = ?');
    $request->execute([$username]);
    $result = $request->fetch();

    //we compare password...
    $password_correct = password_verify($password, $result["user_password"]);

    if(!$result){
        header('Location: login.php');
    }
     else{
         if($password_correct){
             $_SESSION["username"] = $username;
         }
          else{
            header('Location: login.php');
          }
     }
}


function get_id(string $username){
    //we connect to database...
    $database = db_connect();

    //we getting user id...
    $request = $database->prepare('SELECT user_id FROM users WHERE username = ?');
    $request->execute([$username]);
    $result = $request->fetch();

    return $result["user_id"];
}


function add_recipe(string $title, string $description, string $author, string $image_url, int $id){
     //we connect to database...
     $database = db_connect();

     //we add recipe in the database...
     $request = $database->prepare('INSERT INTO recipes(recipe_title, recipe_description, recipe_author, recipe_image, user_id) 
                                    VALUES (?, ?, ?, ?, ?)');
    $request->execute([$title, $description, $author, $image_url, $id]);
}