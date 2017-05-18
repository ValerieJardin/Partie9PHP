<?php
/** Déclaration de deux variables tableaux : 
  - associatif nommé month
  - numéroté nommé daysWeek * */
$months = array('1' => 'janvier', '2' => 'février', '3' => 'mars', '4' => 'avril', '5' => 'mai', '6' => 'juin', '7' => 'juillet', '8' => 'août', '9' => 'septembre', '10' => 'octobre', '11' => 'novembre', '12' => 'décembre');
$daysWeek = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
//  Utilisation de isset() pour déterminer si les variables sont définies et sont différentes de NULL
if (isset($_POST['years']) && isset($_POST['months'])) {
    // Récupération des variables superglobales $_POST dans des variables
    $years = $_POST['years'];
    $month = $_POST['months'];
}

// Création d'une fonction pour récupérer toutes les données du calendrier nommée getAll
function getAll($years) {
    // Déclaration d'une variable pour déterminer que le calendrier est un tableau vide au départ
    $calendar = array();
    // Retourne le timestamp du premier mois du premier jour de l'année sélectionnée par l'utilisateur. 
    $date = strtotime($years . '-01-01');
    /** Boucle while avec la  fonction date() qui retourne la date sous forme d'une chaîne, au format donné par 
      le paramètre format 'Y', fournie par le paramètre timestamp correspondant à $date * */
    while (date('Y', $date) == $years) {
        // Déclaration des variables :
        // Année
        $y = date('Y', $date);
        // Mois
        $m = date('n', $date);
        // Quantième
        $d = date('d', $date);
        /** str_replace() permet de remplace le premier jour de la semaine par défaut anglaise qui est 
          dimanche par lundi * */
        $week = str_replace('0', '7', date('w', $date));
        // Donne la forme de la variable tableau $calendar
        $calendar[$y][$m][$d] = $week;
        // Retourne le timestamp d'une date de la forme année-mois-quantième qui est dans $dtae + 1 jour
        $date = strtotime(date('Y-m-d', $date) . '+1 DAY');
    }
    return $calendar;
}

// Mise de la fonction getAll() dans une variables
$dates = getAll($years);
/** Fonction current() qui retourne l'élément courant du tableau; cette fonction  ne fait que retourner l'élément 
 * courant pointé par le pointeur interne du tableau array. current() ne déplace pas le pointeur. 
 * Si le pointeur est au-delà du dernier élément de la liste, current() retourne FALSE. * */
$currentDate = current($dates);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 8 de la partie 9 en PHP</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Chewy|Cookie|Dancing+Script" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet 
        d'avoir l'année. En fonction des choix, afficher un calendrier.-->
    </head>
    <body id="calendarBody">
        <header>
            <!--L'instruction de langage include inclut et exécute le fichier spécifié en argument. 
            Il est important de noter que lorsqu'un fichier est include (ou require), les erreurs d'analyse apparaîtront 
            en HTML tout au début du fichier, et l'analyse du fichier parent ne sera pas interrompue. Pour cette raison, 
            le code qui est dans le fichier doit être placé entre les balises habituelles de PHP. -->
            <?php include '../index.php'; ?>
        </header>
        <h1 class="title">Calendrier</h1>
        <div class="form">
            <form action="index.php" method="POST">
                <select name="months">
                <!--Affichage du tableau associatif à l'aide d'une boucle foreach : qui passe en revue le tableau 
                $months. À chaque itération, la valeur de l'élément courant est assignée à $value = $monthss et le 
                pointeur interne de tableau est avancé d'un élément (ce qui fait qu'à la prochaine itération, on 
                accédera à l'élément suivant).De plus, la clé de l'élément courant est assignée à la variable $key 
                à chaque itération. -->
                    <?php foreach ($months as $key => $monthss) {
                        ?>
                        <!--Affichage de la valeur de $key en utilisasant le fonction ucfirst(); uc = uppercase, qui 
                        retourne la chîne de caractères après avoir remplacé le premier caractère par sa majuscule, 
                        si le premier caractère est alphabétique. -->

                        <!-- Si le visiteur à choisi un mois $month qui se trouve dans la liste déroulante $key alors 
                        il restera sélectionné-->
                        <option value="<?php echo $key ?>"<?php if ($key == $month) {echo 'selected';}?>>
                                    <?php echo ucfirst($monthss); ?>
                        </option>
                    <?php } ?>
                </select>
                <!--Affichage des années à l'aide d'une boucle for: itération par rapport à un tableau correspondant 
                aux années allant de 1970 à 2039. -->
                <select name="years">
                    <?php for ($year = 1970; $year <= 2039; $year++) { ?>
                        <!-- Si le visiteur à choisi une année $year qui se trouve dans la liste déroulante $years alors 
                        elle restera sélectionnée-->
                        <option <?php if ($years == $year) {echo 'selected';}?>><?= $year; ?></option>
                        <?php } ?>
                </select>
                <!--Bouton permettant de valider l'année et le mois choisi-->
                <button name="valid" type="submit">Valider</button>
            </form>
        </div>

        <div class="table">
            <?php
            /** Déclarations des conditions d'affichage dans le calendrier/tableau du mois et année sélectionnés : 
             * Utilisation de isset() pour déterminer si $currentDate est définie et est différente de NULL* */
            if (isset($currentDate)) {
                /** Affichage du tableau en fonction du mois et de l'année sélectonnés à l'aide d'une 
                  boucle foreach : qui passe en revue le tableau $currentDate. À chaque itération, la valeur de
                  l'élément courant est assignée à $value = $day et le pointeur interne de tableau est avancé d'un
                  élément (ce qui fait qu'à la prochaine itération, on accédera à l'élément suivant).De plus,
                  la clé de l'élément courant est assignée à la variable $m à chaque itération. * */
                foreach ($currentDate as $m => $day) {
                    if ($month == $m) {
                        ?>
                        <!--Titre donnant le mois sélectionné-->            
                        <h2><?php echo ucfirst($months[$month]); ?></h2>
                        <table>
                            <thead>
                                <!-- Les jours de la semaine -->
                                <tr>
                                    <?php foreach ($daysWeek as $days) { ?>
                                        <th><?= $days ?></th>             
                                    <?php } ?> 
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!--Fonction end() déplace le pointeur interne du tableau $day jusqu'au dernier 
                                    élément et retourne sa valeur. -->
                                    <?php
                                    $endDay = end($day);
                                    foreach ($day as $days => $week) {
                                        /** Si le premier jour du mois n'est pas un lundi alors nous indiquons 1 ou 
                                         * plusieurs case(s) vide(s)=> colspan  * */
                                        if ($days == 1 && $week != 1) {
                                            ?>
                                            <td colspan="<?php echo $week - 1; ?>" class="emptyTop"></td>
                                        <?php } ?>
                                        <!--Les autres cases étant actives donc avec des quantièmes à l'intérieur. -->
                                        <td class="active"><?php echo $days; ?></td>
                                        <?php if ($week == 7) {
                                            ?>
                                            <!--Lorsque l'on arrive à dimanche il faut aller à la ligne.-->    
                                        </tr><tr>
                                        <?php } ?>
                                        <?php
                                    }
                                    if ($endDay != 7) {
                                        ?>
                                        <!--Mettre des cases vides si le mois s'arrète avant un dimanche. -->    
                                        <td colspan="<?php echo 7 - $endDay; ?>" class="emptyBottom"></td>
                                    <?php }
                                    ?>
                                </tr>
                            </tbody>
                        </table>

                    <?php } ?>
                    <?php
                }
            }
            ?>
        </div>
</html>