<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 4 de la partie 9 en PHP</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Afficher le timestamp du jour.
            Afficher le timestamp du mardi 2 août 2016 à 15h00.-->
    </head>
    <body>
        <header>
            <?php include '../index.php'; ?>
        </header>
        <?php
        // Définition du fuseau horaire par défaut à utiliser.
        date_default_timezone_set('UTC');
        ?>
        <!--Utilisation de la fonction mktime() qui retourne le timestamp UNIX d'une date-->
        <p>Voici le timestamp actuel : <br/><?php echo time(); ?></p> 
        <p>Voici le timestamp du 2 août 2016 à 15H : <?php echo mktime(15, 0, 0, 8, 2, 2016) ?></p>
    </body>
</html>