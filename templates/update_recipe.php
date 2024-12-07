<?php if(isset($_SESSION["username"])) : ?>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecipeShare - Modifier vos recettes</title>
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
                    <li class="nav-item"><a href="home.php" class="nav-link text-light">Accueil</a></li>
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
    </header><br><br>

    <main>
        <section class="add-recipe">
             <div class="container">
                <h1 class="text-center">Modifier votre recette</h1><br>

                <?php update(); ?>
                <br>

                <?php foreach($recipes as $recipe) : ?>
                    <form method="POST" class="form">
                    <div class="form-section">
                        <div class="col-7">
                            <label for="title" class="form-label">Titre</label>
                            <input type="text" name="title" id="title" value="<?php echo $recipe["title"]; ?>" required placeholder="Donnez le nom de la recette" class="form-control">
                        </div>
                    </div><br>

                    <div class="form-section">
                        <div class="col-7">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" required placeholder="Décrivez la recette (ingrédients, temps de cuisson etc.)" cols="30" rows="10" class="form-control">
                                <?php echo $recipe["details"]; ?>
                            </textarea>
                        </div>
                    </div><br>

                    <div class="form-section">
                        <div class="col-7">
                            <label for="author" class="form-label">Auteur</label>
                            <input type="text" name="author" id="author" value="<?php echo $recipe["author"]; ?>" required placeholder="Qui a créer la recette?" class="form-control">
                        </div>
                    </div><br>

                    <div class="form-section">
                        <div class="col-7">
                            <label for="image" class="form-label">URL de l'image</label>
                            <input type="url" name="image" id="image" value="<?php echo $recipe["img"]; ?>" required placeholder="http://..." class="form-control">
                        </div>
                    </div><br>

                    <div class="form-section">
                        <div class="col-7">
                            <button type="submit" name="btn-update" id="btn-update" class="btn btn-primary">Modifier</button>
                        </div>
                    </div>
                </form>
                <?php endforeach; ?>
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