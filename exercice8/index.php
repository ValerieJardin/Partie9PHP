<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 8 de la partie 9 en PHP</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Afficher la date du jour - 22 jours.-->
    </head>
    <body>
        <header>
            <?php include '../index.php'; ?>
        </header>
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
        <p>CORRECTION :</p>
        <?php
        // Indique la date actuelle
        $date = date_create();
        // Modifie la date pour donner la date d'il y a 22 jours
        date_modify($date, '-22 DAYS');
        ?>
        <p>Il y a 22 jours nous étions le : "<?php echo date_format($date, 'd-m-Y'); ?>".</p>
    </body>
</html>