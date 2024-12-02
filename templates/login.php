<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecipeShare - Connexion</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="shortcut icon" href="../../icons/recipe-share-icon.png" type="image/x-icon">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <img src="../../icons/recipe-share-icon.png" width="250" alt="app's icon">
                </div>

                <h1 class="text-center">Connexion</h1>
                <p class="text-secondary text-center">Connectez-vous à votre compte</p><br>

                <?php login(); ?>
                <br>

                <form method="POST" class="row gy-4">
                    <div class="col-12">
                        <label for="username" class="form-label">Nom d'utilisateur</label>
                        <input type="text" name="username" id="username" required class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" name="password" id="password" required class="form-control">
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" name="btn-login" id="btn-login" class="btn btn-warning text-light">Connexion</button>
                        <div class="form-text">Pas encore inscrit? <a href="signup.php">Inscrivez-vous</a></div>
                    </div>
                </form>
            </div>

            <div class="col">
                <img src="../../images/img-login.jpg" alt="" class="img-fluid ms-3">
            </div>
        </div>
    </div>

    <script src="../../sass/vendors/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>