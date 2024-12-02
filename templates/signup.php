<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecipeShare - Inscription</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="shortcut icon" href="../../icons/recipe-share-icon.png" type="image/x-icon">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col m-auto">
                <div class="text-center">
                    <img src="../../icons/recipe-share-icon.png" width="250" alt="app's icon">
                </div>

                <h1 class="text-center">Inscription</h1>
                <p class="text-secondary text-center">Inscrivez-vous dès maintenant</p><br>

                <form method="POST" class="row gy-4">
                    <div class="col">
                        <label for="last-name" class="form-label">Nom</label>
                        <input type="text" name="last-name" id="last-name" required class="form-control">
                    </div>

                    <div class="col">
                        <label for="first-name" class="form-label">Prénom</label>
                        <input type="text" name="first-name" id="first-name" required class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Adresse e-mail</label>
                        <input type="email" name="email" id="email" required class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="username" class="form-label">Nom d'utilisateur</label>
                        <input type="text" name="username" id="username" required class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="password" class="form-label">Créer un mot de passe</label>
                        <input type="password" name="password" id="password" required placeholder="8 caractères minimum" minlength="8" class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="password-cpy" class="form-label">Confirmer le mot de passe</label>
                        <input type="password" name="password-cpy" id="password-cpy" required class="form-control">
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" name="btn-signup" id="btn-signup" class="btn btn-primary">Inscription</button>
                        <div class="form-text">Déja inscrit? <a href="login.php">Connectez-vous</a></div>
                    </div>
                </form>
            </div>

            <div class="col">
                <img src="../../images/img-sign.jpg" alt="" class="img-fluid ms-3">
            </div>
        </div>
    </div>
</body>
</html>