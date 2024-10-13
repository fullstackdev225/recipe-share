<!DOCTYPE html>
<html lang="fr">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>RecipeShare - Interface utilisateur</title>
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
                    <li class="nav-item"><a href="home.php" class="nav-link text-light active">Accueil</a></li>
                    <li class="nav-item"><a href="add-recipe.php" class="nav-link text-light">Ajouter une recette</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link text-light">Contact</a></li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <img src="../../icons/user.png" alt="">
                        </a>
                    </li>
                 </ul>
             </div> 
             </nav>
         </header>

         <main>
            <section class="img-back">
                    <div class="carousel slide" id="background-image">
                         <div class="carousel-inner">
                            <div class="carousel-item active">
                                 <img src="../../images/img-back.jpg" alt="" style="height: 600px;" class="d-block w-100">
                                 <div class="carousel-caption">Partagez <br> vos meilleurs <br> recettes ici</div>
                            </div>
                         </div>
                    </div>
            </section><br><br>

            <section class="recipe-lists">
                  <div class="container">
                       <h1 class="text-center">Mes recettes</h1>
                  </div>
            </section>
         </main>
    </body>
</html>