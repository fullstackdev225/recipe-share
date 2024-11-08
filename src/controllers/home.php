<?php 

error_reporting(E_ERROR | E_PARSE);

session_start();

require_once('../model.php');

   if(isset($_POST["btn-login"])){
            $username = $_POST["username"];
            $user_password = $_POST["user-password"];

            authentification($username, $user_password);
       } 

    $user_id = get_id($_SESSION["username"]);

    $recipes = get_recipe($user_id);

require_once('../../templates/home.php');