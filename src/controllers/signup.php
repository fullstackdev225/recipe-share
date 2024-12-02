<?php

error_reporting(E_ERROR | E_PARSE);

require_once('../models/signup.php');

function signup(){
    if(isset($_POST["btn-signup"])){
        $lastName = $_POST["last-name"];
        $firstName = $_POST["first-name"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $passwordCopy = $_POST["password-cpy"];

        //we verify email validation...
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            //we verify if email exists in the database...
            if(ifEmailExists($email)){
                 echo '<div class="alert alert-danger alert-dismissible">
                            Cet email existe déja
                            <button class="btn-close" data-bs-dismiss="alert"></button>
                        </div>';
            }
             else{
                //we verify if username exists in the database..;
                if(ifUsernameExists($username)){
                    echo '<div class="alert alert-danger alert-dismissible">
                            Le nom d\'utilisateur existe déja
                            <button class="btn-close" data-bs-dismiss="alert"></button>
                        </div>';
                }
                 else{
                    //we verify if passwords are the same...
                    if($password !== $passwordCopy){
                        echo '<div class="alert alert-danger alert-dismissible">
                                    Les mots de passe ne sont pas identiques
                                    <button class="btn-close" data-bs-dismiss="alert"></button>
                              </div>';
                    }
                     else{
                        //we hash password...
                        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                        //we store user informations in the database...
                        insertData($lastName, $firstName, $email, $username, $passwordHash);
                        header('Location: login.php');
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