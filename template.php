<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/main.css" />
    <title>Bibliothèque</title>
</head>

<body class="o-body">
    <div class="o-page">
        <div class="o-header">
            <div class="o-navigation">
                <ul>
                    <a href="index.php">
                        <li>Accueil</li>
                    </a>
                    <a href="livres.php">
                        <li>Livres</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>

    <!--Ici on va intégrer le contenu du site -->

    <!--Affichage de la variable $content  -->
    <div class="o-main">
        <h1 class="o-main-title"><?= $titre ?></h1>
        <?= $content ?>
    </div>
</body>

</html>