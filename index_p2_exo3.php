<?php 
   $gender = 'homme';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 2 exo 3</title>
</head>

<!-- traduire un code avec des if et des else 
echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';  cette condition condensée s'appelle le ternaire; La condition testée est $gender >= Homme  . Si c'est vrai, alors la valeur indiquée après le point d'interrogation (ici 'C\'est une développeuse !!!'  ) sera affectée à la variable $majeur  . Sinon, c'est la valeur qui suit le symbole « deux-points » qui sera affectée à $gender  . -->
<body>

    <p><?php
        if($gender != 'homme'){
            echo 'C\'est une développeuse !!!';
        }
        else{
            echo 'C\'est un développeur !!!';
        }
    
    ?></p>
 

    
</body>
</html>