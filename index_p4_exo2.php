<?php 
 $pharse1 = 'ceci est ma premiere chaine de caractères';
 $pharse2 = 'ceci est ma deuxième chaine de caractères';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 4 exo 2</title>
</head>

<!-- Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit la concaténation de ces deux chaines. -->
<body>


<?php
 function givemecomm($pharse1, $pharse2){
   
    return $pharse1 . ' '. $pharse2;
}?>

<p><?php 
    echo givemecomm($pharse1, $pharse2);

?></p>

   



    
    
</body>
</html>