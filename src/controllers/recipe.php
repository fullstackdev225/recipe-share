<?php 

error_reporting(E_ERROR | E_PARSE);

session_start();

require_once('../models/login.php');
require_once('../models/recipe.php');
require_once('../models/user.php');

    if(isset($_POST["btn-login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        authSession($username, $password);
    }

    $userId = getUserId($_SESSION["username"]);
    $recipes = getRecipe($userId);

require_once('../../templates/recipe.php');