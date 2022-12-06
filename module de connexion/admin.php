<?php 
   include 'connect.php';
   ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="module_connexion.css">
    <title>Document</title>
</head>
<body>
    <?php
    include 'header.php'
    ?>

    <div class="millieu">
    <h1>Bonjour <?= $_SESSION["login"]?> </h1>
    <h1>Voici les informations de la base de donnée<br></h1>
    <?php

   
 
    

$result = $connect->query("SELECT *  FROM utilisateurs ;");

$a= $result -> fetch_array(MYSQLI_ASSOC);

echo "<br><table border='5'><tr>";


foreach ($a as $key => $value)
{
   echo " <th> " . $key . " </th> ";
}
echo "</tr>";
while ($a != NULL)
{
   echo "<tr>";
   foreach ($a as $value)
   {
         echo "<td>" . $value . "</td>";
   }
   echo "</tr>";
   $a = $result -> fetch_array(MYSQLI_ASSOC);
}
echo "</table>";
?>

    
    </div>

    <?php
    include 'footer.php'
    ?>
    
</body>
</html>