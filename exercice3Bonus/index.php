<!DOCTYPE html>
<html>
    <head>
        <title>Bonus de l'exercice 3 de la partie 9 en PHP</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
            Bonus : Le faire en français.-->
    </head>
    <body>
        <?php
        // Définition du fuseau horaire par défaut à utiliser.
        date_default_timezone_set('UTC');
        /** Utilisation de la fonction setlocale() qui modifie les informations de localisation et du paramètre 
          categorie LC_TIME pour le format de date et d'heure avec strftime() * */
        setlocale(LC_TIME, 'fr_FR.utf8');
        ?>
        <!--Utilisation de la fonction strftime() qui formate une date/heure locale avec la configuration locale-->
        <p>Aujourd'hui nous sommes : <br/><?php echo strftime('%A %e %B %G'); ?></p> 
    </body>
</html>