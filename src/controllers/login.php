<?php 

error_reporting(E_ERROR | E_PARSE);

session_start();

require_once('../models/login.php');

function login(){
    if(isset($_POST["btn-login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        authLogin($username, $password);
    }
}

require_once('../../templates/login.php');