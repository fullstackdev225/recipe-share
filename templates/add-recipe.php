<!DOCTYPE html>
<html lang="fr">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>RecipeShare - Ajoutez une recette</title>
       <link rel="shortcut icon" href="../../icons/recipe-share.png" type="image/x-icon">
       <link rel="stylesheet" href="../../css/main.css">
       <link rel="stylesheet" href="../../css/style.css">
    </head>

    <body>
         <header>
             <nav class="navbar navbar-expand-md bg-dark">
                <div class="container">
                 <a href="home.php" class="navbar-brand">
                     <img src="../../icons/recipe-share.png" width="100" alt="recipe share's icon">
                 </a>

                 <ul class="navbar-nav">
                    <li class="nav-item"><a href="home.php" class="nav-link text-light">Accueil</a></li>
                    <li class="nav-item"><a href="add-recipe.php" class="nav-link text-light active">Ajouter une recette</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link text-light">Contact</a></li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <img src="../../icons/user.png" alt="">
                        </a>
                    </li>
                 </ul>
             </div> 
             </nav>
         </header><br><br>

         <main>
            <section class="form-add">
                 <div class="container">
                    <form method="POST" class="form">
                        <div class="form-section">
                           <div>
                                 <label for="recipe-title" class="form-label">Titre</label>
                                 <input type="text" name="recipe-title" id="recipe-title" required class="form-control">
                           </div>
                        </div><br>

                        <div class="form-section">
                            <div>
                                <label for="recipe-description" class="form-label">Description</label>
                                <textarea name="recipe-description" id="recipe-description" minlength="10" required cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div><br>

                        <div class="form-section">
                            <div>
                                <label for="recipe-author" class="form-label">Auteur</label>
                                <input type="text" name="recipe-author" id="recipe-author" required class="form-control">
                            </div>
                        </div><br>

                        <div class="form-section">
                            <div>
                                <label for="url-image" class="form-label">URL de l'image</label>
                                <input type="url" placeholder="http://..." name="url-image" id="url-image" required class="form-control">
                            </div>
                        </div><br>

                        <div class="form-section">
                            <div>
                                 <button name="btn-add" id="btn-add" class="btn btn-primary">Ajouter</button>
                            </div>
                        </div>
                    </form>
                 </div>
            </section>
         </main>
    </body>
</html>