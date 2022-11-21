<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retest exo</title>
</head>
<body>
<form action=""method="get">>
    
    <label for="name">Nom:</label>
    <input type="text" name="nom" id="nom">
    
    <label for="name">Prenom:</label>
    <input type="text" name="prenom" id="prenom">
   

    <label for="age">Quel est ton age:</label>
    <input type="text" name="age" id="age">
   
   <input type="submit" value="Envoyer">  
   </form>
    
    <?php
    $counter = 0;

    foreach ($_GET as $value){
        $counter = $counter +1;

    }
    echo $counter;

    ?>
</body>
</html>