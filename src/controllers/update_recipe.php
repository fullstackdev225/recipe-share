<?php 

error_reporting(E_ERROR | E_PARSE);

session_start();

require_once('../models/login.php');
require_once('../models/recipe.php');

    if(isset($_POST["btn-login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        authSession($username, $password);
    }

    if(isset($_GET["recipe-id"])){
        $recipeId = $_GET["recipe-id"];
    }

    $recipes = getRecipes($recipeId);

    function update(){
        if(isset($_POST["btn-update"])){
            $title = $_POST["title"];
            $description = $_POST["description"];
            $author = $_POST["author"];
            $image = $_POST["image"];
            $recipeId = $_GET["recipe-id"];

            updateRecipe($title, $description, $author, $image, $recipeId);
            echo '<div class="alert alert-success alert-dismissible">
                     Votre recette a été modiifée avec succès
                     <button class="btn-close" data-bs-dismiss="alert"></button>
                 </div>';
        }
    }

require_once('../../templates/update_recipe.php');