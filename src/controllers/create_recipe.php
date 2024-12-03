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

    function add(){
        if(isset($_POST["btn-add"])){
            $title = $_POST["title"];
            $description = $_POST["description"];
            $author = $_POST["author"];
            $image = $_POST["image"];
            $userId = getUserId($_SESSION["username"]);

            addRecipe($title, $description, $author, $image, $userId);
            echo '<div class="alert alert-success alert-dismissible">
                     Votre recette a été ajoutée avec succès
                     <button class="btn-close" data-bs-dismiss="alert"></button>
                 </div>';
        }
    }

require_once('../../templates/create_recipe.php');