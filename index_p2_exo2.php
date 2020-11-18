<?php 
    $gender = 'homme';
    $age = 18;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 2 exo 2</title>
</head>

<!-- Créer deux variables age et gender. La variable gender peut prendre comme valeur :

Homme
Femme
En fonction de l'âge et du genre afficher la phrase correspondante :

Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeur
Vous êtes une femme et vous êtes mineur
Gérer tous les cas..-->
<body>
 
 <p><?php 
    if($gender == 'homme' && $age >= 18){
        echo 'Vous êtes un homme et vous êtes majeur';
    }
    else if($gender == 'homme' && $age < 18){
        echo 'Vous êtes un homme et vous êtes mineur';
    }
    else if($gender == 'femme' && $age >= 18){
        echo 'Vous êtes une femme et vous êtes majeure';
    }
    else if($gender == 'femme' && $age < 18){
        echo 'Vous êtes une femme et vous êtes mineure';
    }
    
 ?></p>

    
</body>
</html>