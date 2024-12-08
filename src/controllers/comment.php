<?php

error_reporting(E_ERROR | E_PARSE);

session_start();

require_once('../models/login.php');
require_once('../models/user.php');
require_once('../models/comment.php');

    if(isset($_POST["btn-login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        authSession($username, $password);
    }

    //we add comment in the database...
    if(isset($_GET["recipe-id"])){
        $recipeId = $_GET["recipe-id"];
    }

    function inserComment(){
        if(isset($_POST["btn-comment"])){
            $userComment = $_POST["user-comment"];
            $userId = getUserId($_SESSION["username"]);
            $recipeId = $_GET["recipe-id"];

            addComment($userComment, $userId, $recipeId);
             echo '<div class="alert alert-success alert-dismissible">
                     Votre commentaire a été ajouté !
                     <button class="btn-close" data-bs-dismiss="alert"></button>
                 </div>';
        }
    }

require_once('../../templates/comment.php');