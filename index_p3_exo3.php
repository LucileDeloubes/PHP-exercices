<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 3 exo 3</title>
</head>

<!-- Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.-->
<body>

<?php 
    $months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre')
?>


<?php foreach($months as $month){ ?>
       <p><?php  echo $month; ?></p>
       <?php } ?>


    
</body>
</html>