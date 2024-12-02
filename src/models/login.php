<?php 

require_once('../databaseConnection.php');

function authLogin(string $username, string $password){
   //we connect to database...
   $database = dbConnect();

   //we getting user password...
   $request = $database->prepare("SELECT passwrd FROM users WHERE username = ?");
   $request->execute([$username]);
   $result = $request->fetch();
   
   //we verify user password...
   $ifPasswordCorrect = password_verify($password, $result["passwrd"]);

   //we compare user password...
   if(!$result){
      echo '<div class="alert alert-danger alert-dismissible">
               Identifiants incorrect
               <button class="btn-close" data-bs-dismiss="alert"></button>
           </div>';
   }
    else{
        if($ifPasswordCorrect){
            $_SESSION["username"] = $username;
            header('Location: home.php');
        }
         else{
            echo '<div class="alert alert-danger alert-dismissible">
                        Identifiants incorrect
                        <button class="btn-close" data-bs-dismiss="alert"></button>
                  </div>';
         }
    }
}


function authSession(string $username, string $password){
//we connect to database...
   $database = dbConnect();

   //we getting user password...
   $request = $database->prepare("SELECT passwrd FROM users WHERE username = ?");
   $request->execute([$username]);
   $result = $request->fetch();
   
   //we verify user password...
   $ifPasswordCorrect = password_verify($password, $result["passwrd"]);

   //we compare user password...
   if(!$result){
      header('Location: login.php');
   }
    else{
        if($ifPasswordCorrect){
            $_SESSION["username"] = $username;
        }
         else{
            header('Location: login.php');
         }
    }
}