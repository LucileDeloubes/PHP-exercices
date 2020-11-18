<!-- déclaration de variable, elle peut être placer au dessus du doctype -->
<?php 
    $lastname = 'Deloubes';
    $firstname = 'Lucile';
    $age = 26; 
    ?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 1 exo 2</title>
</head>
<body>
    <!-- les espaces ' ' et pour concaténer .  -->
    <p><?php echo $lastname . ' ' . $firstname ?></p>
    <p><?php echo $firstname ?></p>
    <p><?php echo $age ?></p>


    
</body>
</html>