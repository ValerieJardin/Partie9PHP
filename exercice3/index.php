<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 3 de la partie 9 en PHP</title>
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
        ?>
        <!--Utilisation de la fonction date()qui retourne une date en anglais sous forme d'une chaîne, au format donné par 
        le paramètre format = l l F y-->
        <p>Today we are : <br/><?php echo date('l j F Y'); ?></p> 
    </body>
</html>