<!-- initialisation des variables-->
<?php 
  $fizz= 'Fizz';
  $buzz= 'Buzz';
  $fizzBuzz = 'FizzBuzz';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 4 exo 6</title>
</head>

<!-- consignes : Afficher les nombres de 1 à 100. En remplaçant le nombre par un mot selon certaines conditions :

Le mot Fizz s'il est multiple de 3
Le mot Buzz s'il est multiple de 5
Le mot FizzBuzz s'il est multiple de 3 et de 5-->


<body>

<!-- Création de la fonction -->

<?php
    
   function fizzbuzz($numbermin){
     for ($numbermin=1 ; $numbermin <= 100; $numbermin++){  ?>
       
      <p><?php 
        if ($numbermin % 3 == 0 ){
           echo 'fizz';
        }
        else if ($numbermin % 5 == 0 ){
           echo 'buzz';
        }
        else{
            echo $numbermin;
        };
       
        
   }; 
}; 
       ?></p> 
    
 <!-- afficher le résultat --> 
      <p><?php  fizzbuzz($numbermin);?></p>




</body>
</html>