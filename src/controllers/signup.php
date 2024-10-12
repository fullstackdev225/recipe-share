<?php 

error_reporting(E_ERROR | E_PARSE);

require_once('../model.php');

function userSigned(){
    //we verify email validation...
    if(isset($_POST["user-email"])){
        $userEmail = $_POST["user-email"];

        if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
              //we verify if email exists in the database...
              if(ifEmailExists($userEmail)){
                echo '<div class="alert alert-danger alert-dismissible">
                            Cet email existe déja
                            <button class="btn-close" data-bs-dismiss="alert"></button>
                      </div>';
              }
               else{
                    //we verify if username exists in the databse...
                    if(isset($_POST["username"])){
                        $username = $_POST["username"];

                        if(ifUsernameExists($username)){
                            echo '<div class="alert alert-danger alert-dismissible">
                                        Cet nom d\'utilisateur existe déja
                                        <button class="btn-close" data-bs-dismiss="alert"></button>
                                  </div>';
                        }
                         else{
                            //we verify passwords...
                            if(isset($_POST["user-password"]) && isset($_POST["user-password2"])){
                                $userPassword = $_POST["user-password"];
                                $userPassword2 = $_POST["user-password2"];

                                if($userPassword !== $userPassword2){
                                    echo '<div class="alert alert-danger alert-dismissible">
                                                Les mots de passe ne sont pas identiques
                                                <button class="btn-close" data-bs-dismiss="alert"></button>
                                        </div>';
                                }
                                 else{
                                    //we store informations in the database...
                                    $pass_hash = password_hash($userPassword, PASSWORD_DEFAULT);
                                    $userLastName = $_POST["user-lastname"];
                                    $userFirstName = $_POST["user-firstname"];

                                    insertData($userLastName, $userFirstName, $userEmail, $username, $pass_hash);
                                 }
                            }
                         }
                    }
               }
        }
         else{
            echo '<div class="alert alert-danger alert-dismissible">
                     Email invalid
                     <button class="btn-close" data-bs-dismiss="alert"></button>
                  </div>';
         }
    }
}

require_once('../../templates/signup.php');