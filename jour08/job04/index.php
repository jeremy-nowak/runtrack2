<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 04</title>
</head>
<body>
    <form action="" method="post" >
        <input type="text" placeholder="Tapez votre prénom ici">
        <input type="submit" value="Connexion" >
    </form>
    
<?php
if (isset($_POST['prenom'])) {
    $_COOKIE['prenom'][] = $_POST['prenom'];
}

if (isset($_COOKIE['prenom'])) {
    foreach ($_COOKIE['prenom'] == $_POST[prenom]) {
        echo  "Bonjour" . $value . ;
       
    } 
    
}
?>
    
</body>
</html>
