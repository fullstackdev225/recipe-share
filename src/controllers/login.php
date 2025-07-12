<?php

error_reporting(E_ERROR | E_PARSE);

session_start();

require_once('../model/db.php');

function userLogin(){
    if(isset($_POST["btn-login"])){
        $username = $_POST["username"];
        $password = $_POST["pass"];

        userLogged($username, $password);
    }
}

require_once('../../templates/login.php');