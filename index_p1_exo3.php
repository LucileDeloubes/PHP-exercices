
<?php 
    $km = 1;
    ?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 1 exo 3</title>
</head>

<!-- consignes : Créer une variable km.
L'initialiser à 1. Afficher son contenu.
Changer sa valeur par 3. Afficher son contenu.
Changer sa valeur par 125. Afficher son contenu.-->
<body>
   
    <p><?php echo $km ?></p>
    <p><?php echo $km = 3; ?></p>
    <p><?php echo $km = 125; ?></p>
<!-- cette solution fonctionne mais il vaut mieux ré-écrire la déclaration de la variable et changer sa valeur entre les paragraphes -->

    
</body>
</html>