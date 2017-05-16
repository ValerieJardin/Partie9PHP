<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 6 de la partie 9 en PHP</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Afficher le nombre de jours dans le mois de février de l'année 2016.-->
    </head>
    <body>
        <?php
        // Définition du fuseau horaire par défaut à utiliser.
        date_default_timezone_set('UTC');
        ?>
        <!--Utilisation de la fonction date()qui retourne une date sous forme d'une chaîne, au format donné par le paramètre 
        format = 't' qui correspond au nombre de jour dans un mois définie. Utilisation de la fonction mktime() qui retourne 
        le timestamp UNIX d'une date donnée. -->
        <p> Il y a eu "<?php echo date('t', mktime(0, 0, 0, 2, 1, 2016)); ?>" jours en février 2016.</p>
    </body>
</html>