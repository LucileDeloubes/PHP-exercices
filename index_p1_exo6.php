<?php 
   // $number = 140;
   // $number += 30;
   // $number /= 2;

   // on peut aussi faire

   $number = (140 + 30)/2 ;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 1 exo 6</title>
</head>

<!-- consignes : Créer une variable number. L'initialiser à 140. Lui ajouter 30. La diviser par 2 et afficher le résultat. N'utiliser qu'une variable.-->
<body>
 
<p><?php echo ($number + 30) / 2  ?></p> 
<!-- Eviter de faire directement le calcul dans l'echo -->

    
</body>
</html>