<?php if(isset($_SESSION["username"])) : ?>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecipeShare - Partager vos recettes en toutes simplicité</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="shortcut icon" href="../../icons/recipe-share.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4974ed612a.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md bg-light">
            <div class="container">
                <a href="home.php" class="navbar-brand">
                    <img src="../../icons/recipe-share.png" width="100" alt="logo de l'application">
                </a>

                <ul class="navbar-nav">
                    <li class="nav-item"><a href="home.php" class="nav-link">Accueil</a></li>
                    <li class="nav-item"><a href="add_recipe.php" class="nav-link">Ajouter une recette</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                </ul>

                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" class="dropdown-toggle text-secondary text-decoration-none" role="button">
                        <i class="fa-solid fa-circle-user fs-3 text-secondary"></i>
                        <span><?php echo $_SESSION["username"] ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Profile</a></li>
                        <li><a href="#" class="dropdown-item">Mes recettes</a></li>
                        <li><a href="#" class="dropdown-item">Aide</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header><br><br>

    <main>
        <section class="recipes-lists">
            <h1 class="text-center">Recettes du jour</h1>
        </section>
    </main><br><br>

    <footer class="bg-dark p-4">
          <p class="text-center fst-italic text-light">@copyright2025 - RecipeShare Made by : <span class="text-uppercase text-decoration-underline">Potey charles</span></p>
    </footer>

    <script src="../../sass/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php endif; ?>