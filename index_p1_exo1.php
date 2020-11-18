<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- déclaration de variable, elle peut être placer au dessus du doctype -->
    <?php 
    $object = 'blablaobject';
    $message = 'ceci est un message';

    ?> 
<!-- Placer les variables dans le html, echo permet d'afficher la variable -->    
    <strong><?php echo $object; ?></strong>
    <p><?php echo $message; ?></p>

<!-- Afficher une variable sans echo -->  
    <?= $message ?>

    
</body>
</html>