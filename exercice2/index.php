<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 2 de la partie 9 en PHP</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)-->
    </head>
    <body>
        <header>
            <?php include '../index.php'; ?>
        </header>
        <!--Utilisation de la fonction date()qui retourne une date sous forme d'une chaîne, au format donné 
        par le paramètre format = d-m-y-->
        <p>Aujourd'hui nous sommes le : <?php echo date('d-m-y'); ?></p> 
    </body>
</html>