<?php 

error_reporting(E_ERROR | E_PARSE);

session_start();

require_once('../model.php');

function userLogged(){
    if(isset($_POST["btn-login"])){
        $username = $_POST["username"];
        $userPassword = $_POST["user-password"];

        login_auth($username, $userPassword);
    }
}

require_once('../../templates/login.php');