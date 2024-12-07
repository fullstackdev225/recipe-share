<?php if(isset($_SESSION["username"])) : ?>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecipeShare - Accueil</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../icons/recipe-share-icon.png" type="image/x-icon">
</head>
<body>
    <header>
         <nav class="navbar navbar-expand-md bg-dark">
            <div class="container">
                <a href="home.php" class="navbar-brand">
                    <img src="../../icons/recipe-share-icon.png" width="110" alt="app's icon">
                </a>

                <ul class="navbar-nav">
                    <li class="nav-item"><a href="home.php" class="nav-link nav-link--active text-light">Accueil</a></li>
                    <li class="nav-item"><a href="create_recipe.php" class="nav-link text-light">Ajouter recette</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link text-light">Contact</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../../icons/user.png" width="32" alt="">
                            <span class="text-light">Bonjour <?php echo $_SESSION["username"]; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="profil.php" class="dropdown-item">Profile</a></li>
                            <li><a href="recipe.php" class="dropdown-item">Mes recettes</a></li>
                            <li><a href="#" class="dropdown-item">Deconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
         </nav>
    </header>

    <main>
        <section class="img-section">
             <div class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../../images/img-background.jpg" alt="" height="500" class="d-block w-100">
                        <div class="carousel-caption text-primary fw-bold">le meilleur endroit pour partager vos recettes</div>
                    </div>
                </div>
             </div>
        </section><br><br>

        <section class="recipes-lists">
            <div class="container">
                 <h1 class="text-center">Les recettes</h1><br>

             <div class="row">
                <?php foreach($recipes as $recipe) : ?>
                    <div class="col-md-3 border-white bg-white m-3 p-3 shadow">
                        <img src="<?php echo $recipe["img"]; ?>" width="200" height="200" alt="">
                        <h2><?php echo $recipe["title"]; ?></h2>
                        <p>Auteur: <?php echo $recipe["author"]; ?></p>
                        <a href="#" class="btn btn-primary">Commenter</a>
                    </div>
                <?php endforeach; ?>
             </div>
            </div>
        </section>
    </main><br><br>

    <footer class="border border-dark bg-dark">
         <p class="text-center text-light mt-3">@copyright2024 - RecipeShare : <span class="text-decoration-underline">Digital Services</span></p>
    </footer>

    <script src="../../sass/vendors/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php endif; ?>