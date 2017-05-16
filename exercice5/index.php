<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 5 de la partie 9 en PHP</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.-->
    </head>
    <body>
        <?php
        // Définition du fuseau horaire par défaut à utiliser.
        date_default_timezone_set('UTC');
        ?>
        <?php
        // Déclaration de la variable indiquant la date actuelle avec la fonction time() qui retourne l'heure courante
        $actualDate = time();
        /** Déclaration de la variable donnant la date de référence avec la fonction strtotime(), fonction permettant
         * de transformer une date en anglais en en timestamp Unix (le nombre de secondes depuis le 1er Janvier 1970 à 00:00:00 UTC) * */
        $referenceDate = strtotime('16-05-2016');
        // Déclaration de la variable calculant la différence entre la date actuelle et le 16/05/16
        $interval = $actualDate - $referenceDate;
        ?>
        <!--Affichage de la différence en utilisant la fonction round() qui retourne la valeur arrondie de $interval à 
        la précision precision (nombre de chiffres après la virgule). Le paramètre precision peut être 
        négatif ou NULL : c'est sa valeur par défaut. Le tout divisé par 86400 pour transformer le timestamp en jour. -->
        <p>Le nombre de jours qui sépare la date actuelle et le 16 mai 2016 est de : <br/><?php echo round($interval / 86400); ?> jours.</p>
    </body>
</html>