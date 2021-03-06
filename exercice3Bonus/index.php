<!DOCTYPE html>
<html>
    <head>
        <title>Bonus de l'exercice 3 de la partie 9 en PHP</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
            Bonus : Le faire en français.-->
    </head>
    <body>
        <header>
            <?php include '../index.php'; ?>
        </header>
        <?php
        /** Utilisation de la fonction setlocale() qui modifie les informations de localisation et du paramètre 
          categorie LC_TIME pour le format de date et d'heure avec strftime() * */
        setlocale(LC_TIME, 'fr_FR.utf8');
        ?>
        <!--Utilisation de la fonction strftime() qui formate une date/heure locale avec la configuration locale-->
        <p>Aujourd'hui nous sommes : <br/><?php echo strftime('%A %d %B %Y'); ?></p> 
    </body>
</html>