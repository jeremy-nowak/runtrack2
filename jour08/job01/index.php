<?php

session_start();

if (isset($_SESSION['nbvisites'])){
    
    
    echo 'Vous avez vu ' . $_SESSION['nbvisite'] . ' fois cette page';

}
else {$_SESSION["nbvisites"]= 0;
}
$_SESSION['nbvisite']+=1;
if (isset($_GET["clear"])){
    
    
    session_destroy();
    header("location:" . "index.php");

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 01</title>
</head>
<body>
    <form action="" method="$_GET">
        <input type="submit" name ="clear" value="reset" >
    </form>
    
</body>
</html>

