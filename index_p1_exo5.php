
<?php 
    $answer = 'no';

    ?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 1 exo 5</title>
</head>

<!-- consignes : Créer une variable answer. L'initialiser avec yes ou no. Si la réponse est yes afficher le message Vous avez répondu "oui"'. Sinon afficher Vous avez répondu "non".-->
<body>
   
<p><?php 
    if($answer == 'yes'){
        echo "oui !";
    }
    else{
        echo "non";
    }
    
?></p>

    
</body>
</html>