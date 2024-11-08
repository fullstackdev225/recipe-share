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
                          <li class="nav-item"><a href="home.php" class="nav-link link-active text-light">Accueil</a></li>
                          <li class="nav-item"><a href="add-recipe.php" class="nav-link text-light">Ajouter une recette</a></li>
                          <li class="nav-item"><a href="contact.php" class="nav-link text-light">Contact</a></li>
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                   <img src="../../images/user.png" alt="" title="<?php echo $_SESSION["username"]; ?>">
                              </a>
                           </li>
                       </ul>
                  </div>
              </nav>
         </header>

         <main>
            <section class="section-background">
                 <div class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../../images/meat.jpg" alt="" style="height: 500px;" class="d-block w-100">
                            <div class="carousel-caption text-warning">
                                Le meilleur endroit pour partager vos recettes
                            </div>
                        </div>
                    </div>
                 </div>
            </section><br><br>

            <section class="recipes-lists">
                <div class="container">
                    <h1 class="text-center">Mes recettes</h1><br>

                   <div class="row gy-4">
                             <?php foreach($recipes as $recipe) : ?>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="<?php echo $recipe["recipe_image"]; ?>" alt="" style="height: 200px;" class="img card-top">
                                    <div class="card-body">
                                        <h3 class="card-title"><?php echo $recipe["recipe_title"]; ?></h3>
                                        <h5 class="card-subtitle"><?php echo $recipe["recipe_author"]; ?></h5>
                                        <p class="card-text"><?php echo $recipe["recipe_description"]; ?></p>
                                    </div>
                                </div>
                            </div>
                          <?php endforeach; ?>
                   </div>
                </div>
            </section>
         </main>
    </body>
</html>
<?php endif; ?>