<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=""method="post">>
    
     <label for="name">Nom:</label>
     <input type="text" name="nom" id="nom">
     
     <label for="name">Prenom:</label>
     <input type="text" name="prenom" id="prenom">
    

     <label for="age">Quel est ton age:</label>
     <input type="text" name="age" id="age">
    
    <input type="submit" value="Envoyer">  


        
<?php

$counter = 0;

foreach ($_POST as $var){
    $counter = $counter+1; 
}
echo "<br>";
echo "Le nombre d’argument POST envoyé est : $counter ";


?> 
</form>
</body>
</html>
