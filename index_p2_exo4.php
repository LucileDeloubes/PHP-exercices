<?php 
    $age = 26;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 2 exo 4</title>
</head>

<!-- traduire un code avec des if et des else 
echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
   -->
<body>

<p><?php 
    if($age >= 18){
        echo 'Tu es majeur(e)';
    }
    else{
        echo 'Tu es mineur(e)';
    }


?></p>
    
    
</body>
</html>