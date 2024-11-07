<?php if(isset($_SESSION["username"])) : ?>
    <!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenue sur votre interface utilisateur</title>
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="shortcut icon" href="../../images/recipe-share-icon.png" type="image/x-icon">
    </head>

    <body>
         <header>
              <nav class="navbar navbar-expand-md bg-dark">
                  <div class="container">
                       <a href="home.php" class="navbar-brand">
                            <img src="../../images/recipe-share-icon.png" width="120" alt="recipe share's icon">
                       </a>

                       <ul class="navbar-nav">
                          <li class="nav-item"><a href="home.php" class="nav-link text-light">Accueil</a></li>
                          <li class="nav-item"><a href="add-recipe.php" class="nav-link text-light link-active">Ajouter une recette</a></li>
                          <li class="nav-item"><a href="contact.php" class="nav-link text-light">Contact</a></li>
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                   <img src="../../images/user.png" alt="" title="<?php echo $_SESSION["username"]; ?>">
                              </a>
                           </li>
                       </ul>
                  </div>
              </nav>
         </header><br><br>

         <main>
            <section class="add-recipe-form">
                 <div class="container">
                     <h1 class="text-center">Ajouter une recette</h1><br>

                 <form method="POST" class="form">
                    <div class="form__section">
                        <div class="col-7">
                            <label for="recipe-title" class="form-label">Titre</label>
                            <input type="text" name="recipe-title" id="recipe-title" required placeholder="Donnez un nom à la recette" class="form-control">
                        </div>
                    </div><br>

                    <div class="form__section">
                        <div class="col-7">
                            <label for="recipe-description" class="form-label">Description</label>
                            <textarea name="recipe-description" id="recipe-description" required placeholder="Décrivez votre recette (ingrédients, temps de cuisson etc.)" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div><br>

                    <div class="form__section">
                        <div class="col-7">
                             <label for="recipe-author" class="form-label">Auteur</label>
                            <input type="text" name="recipe-author" id="recipe-author" required placeholder="Qui a crée la recette?" class="form-control">
                        </div>
                    </div><br>

                    <div class="form__section">
                         <div class="col-7">
                            <label for="recipe-image" class="form-label">Image</label>
                            <input type="file" name="recipe-image" id="recipe-image" required class="form-control">
                         </div>
                    </div><br>

                    <div class="form__section">
                        <div class="col-7">
                            <button type="submit" name="btn-add" id="btn-add" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                 </form>
                 </div>
            </section>
         </main>
    </body>
</html>
<?php endif; ?>