<?php 

error_reporting(E_ERROR | E_PARSE);

session_start();

require_once('../model.php');

function user_login(){
   if(isset($_POST["btn-login"])){
            $username = $_POST["username"];
            $user_password = $_POST["user-password"];

            auth($username, $user_password);
       }

}

require_once('../../templates/login.php');