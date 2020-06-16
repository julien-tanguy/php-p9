<?php 
// echo date('Y-m-d H:i:s');   2012-10-11 15:35:53
// echo date('l j F Y, H:i');  Thursday 11 October 2012, 15:35
// echo date('d F Y');         11 October 2012
// echo date('d/m/Y');         11/10/2012
setlocale(LC_TIME, "fr_FR");

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link style="text/css" rel="stylesheet" href="css/style.css" />
        <title>php - patrtie 9</title>
    </head>
    <body>
    <div class="parent">
        <h1>Les dates</h1>
        <!--exo 1 affiche le jour/mois/ANNÈE complete-->
        <p>Nous sommes le <?= date('d/m/Y') ?></p>
        <!--exo 2-->
        <p>Nous sommes le <?= date('d/m/y') ?></p>
        <!--exo 3-->
        <p>Nous sommes le <?= date('l j F Y') ?></p>
        <!--exo 3 en francais %a= jour de la semaine, %d=jour du mois en numerique, %B= nom complet du mois, %Y= année complete.-->
        <p>Nous sommes le <?= strftime('%A %d %B %Y') ?></p>
        <!--exo 4 -->
        <p>la timestamp du jour est : <?php echo time() ?>.</p>
        <!--la fonction mktime() retourne le Timestamp UNIX d’une date (prend en compte les fuseaux horraires).-->
        <p>la timestamp du mardi 2 août 2016 à 15h00 est : <?php echo mktime(15, 00, 00, 2, 8, 2016); ?> avec la fonction mktime.</p>
        <!--la fonction gmmktime() retourne le Timestamp UNIX d’une date GMT.-->
        <p>la meme timestamp (02/08/2016) : <?php echo gmmktime(15, 00, 00, 2, 8, 2016); ?> avec la fonction gmmktime.</p>
        <!--exo 5-->
        <!-- recuperer les timestamp des deux dates et soustraire la plus vielle a la plus recente-->
        <!--la fonction strtotime() transforme une chaine de caractères de format date en Timestamp-->
        <?php $secondesDifference = (strtotime('6/15/20') - strtotime('5/16/16'));?>
        <p> entre le 15 juin 2020 est le 16 mais 2016, <?= $secondesDifference; ?> secondes ce sont ecoulées</p>
        <?php $daysDifference = $secondesDifference / 86400; ?>
        <p>Ce qui représente, <?= $daysDifference ?> jours.
        <!--exo 6-->
        <p>Le mois de février 2016 compte : <?= cal_days_in_month(CAL_GREGORIAN, 2,2016); ?>  jours.</p>
        <!--exo 7-->
        <p>Dans 20 jours, nous serons le : <?= date('d/m/Y', strtotime('+20 days')); ?></p>
        <!--exo 8-->
        <p>Il y a 22 jours, nous étions le : <?= date('d/m/Y', strtotime('-22 days')); ?></p>
    </div>
    </body>
</html>