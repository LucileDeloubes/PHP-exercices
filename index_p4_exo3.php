<!-- initialisation des variables-->


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 4 exo 3</title>
</head>

<!-- Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
Les deux nombres sont identiques si les deux nombres sont égaux -->
<body>

<!-- Création de la fonction-->

<?php
 function Compare($num1, $num2){
   
    if($num1 > $num2){
        return $num1 . '  est plus grand que ' . $num2;
    }
    else if ($num1 < $num2){
        return $num1 . '  est plus petit que ' . $num2;
    }
    else if ($num1 == $num2){
        return $num1 . '  est égale à  ' . $num2;
    }
}
?>

<!-- afficher le résultat -->
<p><?php 
   echo Compare(10, 12);

?></p>
   



    
    
</body>
</html>