<!DOCTYPE html>
<html lang="fr">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>RecipeShare - Inscription</title>
       <link rel="shortcut icon" href="../../icons/recipe-share.png" type="image/x-icon">
       <link rel="stylesheet" href="../../css/main.css">
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                   <div class="text-center">
                        <img src="../../icons/recipe-share.png" width="300" alt="recipe share's icon">
                   </div>

                   <h1 class="text-center">Inscription</h1><br><br>

                   <?php userSigned(); ?>

                   <form method="POST" class="form row mt-4 gy-4">
                        <div class="col-md-6">
                            <label for="user-lastname" class="form-label">Nom</label>
                            <input type="text" name="user-lastname" id="user-lastname" required class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label for="user-firstname" class="form-label">Prénom</label>
                            <input type="text" name="user-firstname" id="user-firstname" required class="form-control">
                        </div>

                        <div class="col-12">
                            <label for="user-email" class="form-label">Adresse e-mail</label>
                            <input type="email" name="user-email" id="user-email" required class="form-control">
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Nom d'utilisateur</label>
                            <input type="text" name="username" id="username" required class="form-control">
                        </div>

                        <div class="col-12">
                            <label for="user-password" class="form-label">Mot de passe</label>
                            <input type="password" name="user-password" id="user-password" required minlength="8" class="form-control">
                        </div>

                        <div class="col-12">
                            <label for="user-password2" class="form-label">Confirmer le mot de passe</label>
                            <input type="password" name="user-password2" id="user-password2" required class="form-control">
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" name="btn-sign" id="btn-sign" class="btn btn-primary">Inscription</button>
                            <div class="form-text">Déja inscrit? <a href="login.php">Connectez-vous</a></div>
                        </div>
                   </form>
                </div>

                <div class="col-md-6">
                    <img src="../../images/img-signup.jpg" alt="" class="img-fluid ms-3">
                </div>
            </div>
        </div>

        <script src="../../sass/vendors/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>