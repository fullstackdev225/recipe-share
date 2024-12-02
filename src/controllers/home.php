<?php 

error_reporting(E_ERROR | E_PARSE);

session_start();

require_once('../models/login.php');

    if(isset($_POST["btn-login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        authSession($username, $password);
    }

require_once('../../templates/home.php');