<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecipeShare - Ajoutez vos recettes</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="shortcut icon" href="../../icons/recipe-share.png" type="image/x-icon">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Ajouter une recette</h1>

        <form method="POST" class="form mt-5">
             <div class="form-row d-flex justify-content-center">
                <div class="form-col">
                    <input type="text" name="title" id="title" placeholder="Titre" style="width: 500px;" required class="form-control">
                </div>
             </div><br>

             <div class="form-row d-flex justify-content-center">
                <div class="form-col">
                    <textarea name="description" id="description" minlength="12" style="width: 500px;" placeholder="Description..." required class="form-control" cols="30" rows="10"></textarea>
                </div>
             </div><br>

             <div class="form-row d-flex justify-content-center">
                  <div class="form-col">
                      <input type="text" name="author" id="author" placeholder="Auteur" style="width: 500px;" required class="form-control">
                  </div>
             </div><br>

             <div class="form-row d-flex justify-content-center">
                <div class="form-col">
                    <input type="url" name="image-url" id="image-url" style="width: 500px;" placeholder="URL de l'image (http://...)" required class="form-control">
                </div>
             </div><br>

             <div class="form-row d-flex justify-content-center">
                <div class="form-col">
                    <button type="submit" class="btn btn-warning text-light">Ajouter</button>
                </div>
             </div>
        </form><br><br>
    </div>
</body>
</html>