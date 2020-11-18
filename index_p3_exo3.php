<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 3 exo 3</title>
</head>

<!-- Avec le tableau de l'exercice 1, afficher la valeur de l'index 5. -->
<body>

<?php 
    $months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre')
?>
<?php for($case = 0; $case <= 11; $case++){ ?>
<p><?php echo $months[$case] ?></p>
<?php } ?>

    
    
</body>
</html>