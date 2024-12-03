<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecipeShare - Mes recettes</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="shortcut icon" href="../../icons/recipe-share-icon.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Mes recettes</h1><br>

        <div class="row">
                <?php foreach($recipes as $recipe) : ?>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="<?php echo $recipe["img"]; ?>" alt="" height="200" class="img-card-top">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $recipe["title"]; ?></h3>
                                <h6 class="card-subtitle"><?php echo $recipe["author"]; ?></h6>
                                <p class="card-text"><?php echo $recipe["details"]; ?></p>
                                <a href="#" class="btn btn-primary">Modifier</a>
                                <a href="#" class="btn btn-danger">Supprimer</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
             </div>
    </div>
</body>
</html>