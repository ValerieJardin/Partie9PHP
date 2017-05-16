<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 2 de la partie 9 en PHP</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)-->
    </head>
    <body>
        <?php
        // Définition du fuseau horaire par défaut à utiliser.
        date_default_timezone_set('UTC');
        ?>
        <!--Utilisation de la fonction date()qui retourne une date sous forme d'une chaîne, au format donné par le paramètre 
        format = d-m-y-->
        <p>Aujourd'hui nous sommes le : <?php echo date('d-m-y'); ?></p> 
    </body>
</html>