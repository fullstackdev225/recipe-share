<?php 

require_once('../models/recipe.php');

if(isset($_GET["recipe-id"])){
    $recipeId = $_GET["recipe-id"];

    deleteRecipe($recipeId);
    header('Location: home.php');
}