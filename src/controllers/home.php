<?php

session_start();

require_once('../model/db.php');

    if(isset($_POST["btn-login"])){
        $username = $_POST["username"];
        $password = $_POST["pass"];

        userLoggedHome($username, $password);
    }

require_once('../../templates/home.php');