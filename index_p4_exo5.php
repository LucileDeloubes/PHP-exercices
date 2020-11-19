<!-- initialisation des variables-->
<?php 
   $numbermin = 0;
   $numbermax = 300;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 4 exo 5</title>
</head>

<!-- Afficher tous les nombres impairs entre 0 et 300, par ordre croissant.-->
<body>

<!-- Création de la fonction : tant que le nombre mini ne dépasse pas le nombre maxi, alors incrémenté de 1 le nombre mini et pour déterminer si c'est un nombre pair, il faut vérifier si le modulo 2 est égal à 0, si c'est le cas, on continue-->

<p><?php
 
   while ($numbermin < $numbermax){ ?></p>
       
       <p><?php  $numbermin++;
       if($numbermin % 2 == 0)
       continue; ?></p>

      <!-- afficher le résultat --> 
      <p><?php  echo $numbermin;?></p>
        
      <p><?php } ?></p>








    
    
</body>
</html>