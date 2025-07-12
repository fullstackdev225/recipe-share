<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecipeShare - Connectez-vous à votre compte</title>
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
                <h1 class="text-center">Connexion</h1>
                <p class="text-secondary text-center">Connectez-vous à votre compte</p>

                <?php userLogin(); ?>

                <form method="POST" class="row gy-4 mt-4">
                    <div class="col-12">
                        <input type="text" name="username" id="username" placeholder="Nom d'utilisateur" required class="form-control">
                    </div>

                    <div class="col-12">
                        <input type="password" name="pass" id="pass" placeholder="Mot de passe" required class="form-control">
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" name="btn-login" class="btn btn-warning text-light">Connexion</button>
                        <div class="form-text">Pas de compte? <a href="signup.php">Inscrivez-vous</a></div>
                    </div>
                </form>
            </div>

            <div class="col">
                <img src="../../images/img-login.jpg" alt="" class="img-fluid ms-3">
            </div>
        </div>
    </div>

    <script src="../../sass/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>