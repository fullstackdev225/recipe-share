<?php

error_reporting(E_ERROR | E_PARSE);

require_once('../model/db.php');

function userSigned(){
    if(isset($_POST["btn-signup"])){
        $lastName = $_POST["last-name"];
        $firstName = $_POST["first-name"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["pass"];
        $passwordCopy = $_POST["pass2"];

        //Checking email validation...
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            //we verify if email exists in the database...
            if(ifEmailExists($email)){
                 echo '<div class="alert alert-danger">
                            Cet adresse e-mail existe déja
                            <button class="btn-close" data-bs-dismiss="alert"></button>
                        </div>';
            }
             else{
                 //we verify if username exists in the database...
                 if(ifUsernameExists($username)){
                     echo '<div class="alert alert-danger">
                                Cet nom d\'utilisateur existe déja
                                <button class="btn-close" data-bs-dismiss="alert"></button>
                            </div>';
                 }
                  else{
                    //we verify if passwords are the same...
                    if($password !== $passwordCopy){
                         echo '<div class="alert alert-danger">
                                    Mots de passe non conformes
                                    <button class="btn-close" data-bs-dismiss="alert"></button>
                                </div>';
                    }
                     else{
                        //we store user informations in the database...
                        $passHash = password_hash($password, PASSWORD_DEFAULT);

                        insertData($lastName, $firstName, $email, $username, $passHash);
                        header('Location: login.php');
                     }
                  }
             }
        }
         else{
            echo '<div class="alert alert-danger">
                     Email invalid
                     <button class="btn-close" data-bs-dismiss="alert"></button>
                  </div>';
         }
    }
}

require_once('../../templates/signup.php');