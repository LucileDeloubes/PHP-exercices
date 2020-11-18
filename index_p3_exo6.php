

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 3 exo 6</title>
</head>

<!-- Créer un tableau associatif departments avec comme index le numéro des départements des Hauts de France et en valeur leur nom. -->
<body>

<?php 
    $department = array('02'=> 'Aisne', '59'=> 'Nord', '60'=> 'Oise', '62'=> 'Pas-de-Calais', '80'=> 'Somme')
?>
<?php foreach($department as $cle => $element){ ?>
<p><?php echo 'le département '. $element . ' a le numéro '. $cle ?></p> <!-- clé affiche le premier élement et l'element affiche la valeur affecté -->
<?php } ?>
<!-- le symbole => veut dire "associé à" d'où le terme tableau associatif-->

    
    
</body>
</html>