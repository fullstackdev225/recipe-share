<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecipeShare - Inscrivez-vous dès maintenant</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="shortcut icon" href="../../icons/recipe-share.png" type="image/x-icon">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="section-icon text-center">
                    <img src="../../icons/recipe-share.png" alt="logo de l'application" width="200">
                </div>
                <h1 class="text-center">Inscription</h1>
                <p class="text-secondary text-center">Inscrivez-vous dès maintenant</p>

                <?php userSigned(); ?>

                <form method="POST" class="row gy-4 mt-4">
                    <div class="col-md-6">
                        <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Nom" required>
                    </div>

                    <div class="col-md-6">
                        <input type="text" name="first-name" id="first-name" placeholder="Prénom" required class="form-control">
                    </div>

                    <div class="col-12">
                        <input type="email" name="email" id="email" placeholder="Adresse e-mail" required class="form-control">
                    </div>

                    <div class="col-12">
                        <input type="text" name="username" id="username" placeholder="Nom d'utilisateur" required class="form-control">
                    </div>

                    <div class="col-12">
                        <input type="password" name="pass" id="pass" placeholder="Mot de passe" minlength="8" required class="form-control">
                    </div>

                    <div class="col-12">
                        <input type="password" name="pass2" id="pass2" placeholder="Confirmer le mot de passe" required class="form-control"> 
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" name="btn-signup" class="btn btn-primary">Inscription</button>
                        <div class="form-text">Déja inscrit? <a href="login.php">Connexion</a></div>
                    </div>
                </form>
            </div>

            <div class="col">
                <img src="../../images/img-signup.jpg" alt="" class="img-fluid ms-3">
            </div>
        </div>
    </div>

    <script src="../../sass/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>