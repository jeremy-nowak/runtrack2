<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 03</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="prenom" placeholder="Entrez votre prénom">
        <input type="submit" value="Envoyer">
    </form>

    <form action="" method="post">
        <input type="submit" name ="reset" value="reset" >
    </form>
    <ul>
    <h3>Liste des prénoms:</h3>
    <?php
session_start();

if (isset($_POST['prenom'])) {
    $_SESSION['prenom'][] = $_POST['prenom'];
}

if (isset($_SESSION['prenom'])) {
    foreach ($_SESSION['prenom'] as $index => $value) {
        echo '<li>' . $value . '</li>';
       
    } 
    
}



if (isset($_POST["reset"])){
    session_destroy();
    header("location:" . "index.php");
}

?>
</ul>
    
</body>
</html>



