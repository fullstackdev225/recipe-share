<?php

error_reporting(E_ERROR | E_PARSE);

session_start();

require_once('../model.php');

   if(isset($_POST["btn-login"])){
            $username = $_POST["username"];
            $user_password = $_POST["user-password"];

            authentification($username, $user_password);
       }

  
    
    function recipe(){
        if(isset($_POST["btn-add"])){
            $recipe_title = $_POST["recipe-title"];
            $recipe_description = $_POST["recipe-description"];
            $recipe_author = $_POST["recipe-author"];
            $recipe_image = $_POST["recipe-image"];

            add_recipe($recipe_title, $recipe_description, $recipe_author, $recipe_image, get_id($_SESSION["username"]));

            echo '<div class="alert alert-success alert-dismissible">
                       Votre recette a été ajouté avec succès !
                       <button class="btn-close" data-bs-dismiss="alert"></button>
                 </div>';
        }
    }

require_once('../../templates/add-recipe.php');