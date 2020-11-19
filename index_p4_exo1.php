<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 4 exo 1</title>
</head>

<!-- Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine. -->
<body>

<!-- Créer  une fonction avec function, lui donner un nom et lui indiquer une action, ici afficher une chaine de caractère--> 

<?php
 function givemecomm($nom){
   // return remplace le echo dans la fonction /!\ pas de echo dans la fonction
    return 'Bonjour '. $nom;
}
?>
<!-- Appel de la fonction -->
<p><?php 
  echo givemecomm('Maité');

?></p>


</body>
</html>