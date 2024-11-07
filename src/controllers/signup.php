<?php 

error_reporting(E_ERROR | E_PARSE);

require_once('../model.php');

function userSignup(){
    //we verify email validation...
    if(isset($_POST["user-email"])){
        $user_email = $_POST["user-email"];

        if(filter_var($user_email, FILTER_VALIDATE_EMAIL)){
            //we verify if email exists in the database...
            if(if_email_exists($user_email)){
                 echo '<div class="alert alert-danger alert-dismissible">
                            Cet email existe déja
                            <button class="btn-close" data-bs-dismiss="alert"></button>
                        </div>';
            }
             else{
                //we verify if username exists in the database...
                if(isset($_POST["username"])){
                    $username = $_POST["username"];

                    if(if_username_exists($username)){
                         echo '<div class="alert alert-danger alert-dismissible">
                                    Cet nom d\'utilisateur existe déja
                                    <button class="btn-close" data-bs-dismiss="alert"></button>
                                </div>';
                    }
                     else{
                        //we verify if passwords are the same...
                        if(isset($_POST["user-password"]) AND isset($_POST["user-password-cpy"])){
                            $user_password = $_POST["user-password"];
                            $user_password_cpy = $_POST["user-password-cpy"];

                            if($user_password !== $user_password_cpy){
                                echo '<div class="alert alert-danger alert-dismissible">
                                            Les mots de passe ne sont pas identiques
                                            <button class="btn-close" data-bs-dismiss="alert"></button>
                                        </div>';
                            }
                             else{
                                //we store data user in the database...
                                $user_last_name = $_POST["user-lastname"];
                                $user_first_name = $_POST["user-firstname"];
                                $pass_hash = password_hash($user_password, PASSWORD_DEFAULT);

                                insert_data($user_last_name, $user_first_name, $user_email, $username, $pass_hash);
                                header('Location: login.php');
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