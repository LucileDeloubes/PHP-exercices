<!-- initialisation des variables-->


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 4 exo 4</title>
</head>

<!-- Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme : Bonjour + name + firstname + , tu as + age + ans. -->
<body>

<!-- Création de la fonction-->

<?php
 function direBonjour($name, $firstname, $age){
   return 'Bonjour '. $name . ' '. $firstname . ' tu as ' . $age . ' ans.';
  
}
?>

<!-- afficher le résultat -->
<p><?php 
    echo direBonjour('Deloubes', 'Lucile', 26);

?></p>
   



    
    
</body>
</html>