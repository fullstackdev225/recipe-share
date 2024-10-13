<!DOCTYPE html>
<html lang="fr">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>RecipeShare - Contactez-nous</title>
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
                    <li class="nav-item"><a href="add-recipe.php" class="nav-link text-light">Ajouter une recette</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link text-light active">Contact</a></li>
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
            <section class="contact-form">
                <div class="container">
                    <h1 class="text-center">Contactez-nous</h1><br><br>

                    <form class="form gy-4">
                        <div class="row">
                            <div class="col-12">
                                <label for="user-email" class="form-label">Adresse e-mail</label>
                                <input type="email" name="user-email" id="user-email" required class="form-control">
                            </div>
                        </div><br>

                        <div class="row">
                                <div class="col-12">
                                    <label for="user-message" class="form-label">Message</label>
                                    <textarea name="user-message" id="user-message" required cols="30" rows="10" class="form-control"></textarea>
                                </div>
                        </div><br>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-warning text-light">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
         </main>
    </body>
</html>