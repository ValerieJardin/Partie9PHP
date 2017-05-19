<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 6 de la partie 9 en PHP</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Afficher le nombre de jours dans le mois de février de l'année 2016.-->
    </head>
    <body>
        <header>
            <?php include '../index.php'; ?>
        </header>
        <!--Utilisation de la fonction date()qui retourne une date sous forme d'une chaîne, au format donné par le paramètre 
        format = 't' qui correspond au nombre de jour dans un mois définie. Utilisation de la fonction mktime() qui retourne 
        le timestamp UNIX d'une date donnée. -->
        <p> Il y a eu "<?php echo date('t', mktime(0, 0, 0, 2, 1, 2016)); ?>" jours en février 2016.</p>
        <p>CORRECTION : </p><br/>
            <?php 
        $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
        ?>
        <p> Il y a eu "<?php echo $number; ?>" jours en février 2016.</p>
    </body>
</html>