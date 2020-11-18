<?php 
    $age = 26;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 2 exo 1</title>
</head>

<!-- Créer une variable age et l'initialiser avec une valeur.

Si l'âge est supérieur ou égale à 18, afficher "Vous êtes majeur". Dans le cas contraire, afficher "Vous êtes mineur".-->
<body>
 
    <?php if($age >= 18 && $age < 130 ){?>
    <p>Vous êtes majeur ! </p>
    <?php } else if($age < 18 && $age > 0 ){?>
    <p>Vous êtes mineur ! </p>
    <?php } else { ?>
    <p> Mytho ! </p>
    <?php } ?>
    
</body>
</html>