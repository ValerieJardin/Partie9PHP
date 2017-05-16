<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 8 de la partie 9 en PHP</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Afficher la date du jour - 22 jours.-->
    </head>
    <body>
        <?php
        // Définition du fuseau horaire par défaut à utiliser.
        date_default_timezone_set('UTC');
        /** Utilisation de la fonction setlocale() qui modifie les informations de localisation et du paramètre 
          categorie LC_TIME pour le format de date et d'heure avec strftime() * */
        setlocale(LC_TIME, 'fr_FR.utf8');
        // Déclaration de la variable renvoyant le timestamp actuel - 22 jours en utilisant la fonction mktime().
        $twentyTwoDaysBefore = mktime(0, 0, 0, date('m'), date('d') - 22, date('y'));
        /** Utilisation de la fonction strftime() qui formate une date/heure locale avec la configuration locale et qui a 
          pour paramètre un format date et un timestamp.* */
        $frenchDate = strftime('%A %e %B %G', $twentyTwoDaysBefore);
        ?>
        <!--Affichage de la variable $frenchDate qui correspond à la date actuelle + 20 jours. -->
        <p>Il y a 22 jours nous étions le : <br/>"<?php echo $frenchDate; ?>".</p>
    </body>
</html>