<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecipeShare - Contactez nous</title>
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
                    <li class="nav-item"><a href="contact.php" class="nav-link nav-link--active text-light">Contact</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../../icons/user.png" width="32" alt="">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Profile</a></li>
                            <li><a href="#" class="dropdown-item">Mes recettes</a></li>
                            <li><a href="#" class="dropdown-item">Deconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
         </nav>
    </header><br><br>

    <main>
        <section class="contact-section">
              <div class="container">
                  <h1 class="text-center">Contactez-nous</h1><br>

                  <form method="POST" class="form">
                       <div class="form-section">
                          <div class="col-8">
                             <label for="email" class="form-label">Adresse e-mail</label>
                             <input type="email" name="email" id="email" required class="form-control">
                          </div>
                       </div><br>

                       <div class="form-section">
                            <div class="col-8">
                                <label for="message" class="form-label">Message</label>
                                <textarea name="message" id="message" required cols="30" rows="10" class="form-control"></textarea>
                            </div>
                       </div><br>

                       <div class="form-section">
                            <div class="col-8">
                                <button type="submit" class="btn btn-warning text-light">Envoyer</button>
                            </div>
                       </div>
                  </form>
              </div>
        </section>
    </main><br><br>

    <footer class="border border-dark bg-dark">
         <p class="text-center text-light mt-3">@copyright2024 - RecipeShare : <span class="text-decoration-underline">Digital Services</span></p>
    </footer>

    <script src="../../sass/vendors/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>