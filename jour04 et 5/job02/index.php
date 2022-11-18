<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=""method="get">>
    
     <label for="name">Nom:</label>
     <input type="text" name="nom" id="nom">
     
     <label for="name">Prenom:</label>
     <input type="text" name="prenom" id="prenom">

    <input type="submit" value="Envoyer">  

<?php

   
echo '<table border="1">;
<thead>
<tr>
    <th> Arguments</th>
    <th> Valeurs </th>
</tr>
</thead>';




$counter = 0;

foreach ($_GET as $variable => $value){
   echo '<tr>
   <td>'.$variable.'</td> <td>'.$value.'</td>
        </tr>';
}



?> 
</form>
</body>
</html>
