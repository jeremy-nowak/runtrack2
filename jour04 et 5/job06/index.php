<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    
     <label for="number">number:</label>
     <input type="text" name="number" id="number">

    <input type="submit" value="Envoyer">  
    </form>

<?php


if ($_GET ["number"]%2 == 0 ){
    echo "Nombre pair";
}
else {
    echo "Nombre impair";
}



 
 



?> 

</body>
</html>
