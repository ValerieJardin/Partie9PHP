<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 7 de la partie 9 en PHP</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Afficher la date du jour + 20 jours.-->
    </head>
    <body>
        <?php
        // Définition du fuseau horaire par défaut à utiliser.
        date_default_timezone_set('UTC');
        /** Utilisation de la fonction setlocale() qui modifie les informations de localisation et du paramètre 
          categorie LC_TIME pour le format de date et d'heure avec strftime() * */
        setlocale(LC_TIME, 'fr_FR.utf8');
        // Déclaration de la variable renvoyant le timestamp actuel + 20 jours en utilisant la fonction mktime().
        $twentyDaysAfter = mktime(0, 0, 0, date('m'), date('d') + 20, date('y'));
        /** Utilisation de la fonction strftime() qui formate une date/heure locale avec la configuration locale et qui a 
          pour paramètre un format date et un timestamp.* */
        $frenchDate = strftime('%A %e %B %G', $twentyDaysAfter);
        ?>
        <!--Affichage de la variable $frenchDate qui correspond à la date actuelle + 20 jours. -->
        <p>Dans 20 jours nous serons le "<?php echo $frenchDate; ?>".</p>
    </body>
</html>