<?php if(isset($_SESSION["username"])) : ?>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon profil</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="shortcut icon" href="../../icons/recipe-share-icon.png" type="image/x-icon">
</head>
<body>
    <div class="container text-center">
        <div class="profil-icon">
            <img src="../../icons/profile.png" width="300" alt="">
            <h1 class="fw-bold"><?php echo $_SESSION["username"]; ?></h1>
        </div><br>

        <?php foreach($infos as $info) : ?>
            <div class="user-infos">
                <p><span class="fw-bold">Nom:</span> <?php echo $info["last_name"]; ?></p>
                <p><span class="fw-bold">Prénom:</span> <?php echo $info["first_name"]; ?></p>
                <p><span class="fw-bold">Adresse e-mail:</span> <?php echo $info["email"]; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
<?php endif; ?>