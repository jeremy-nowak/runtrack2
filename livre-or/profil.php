<?php
   include 'connect.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="module_connexion.css">
    <title>Home</title>
</head>
<body>
<header>
   <?php 
   include 'header.php';
   ?>
       <h1>Bonjour <?= $_SESSION["login"]?> </h1>
</header>
<div class="millieu">
   
   <div class="formulaire">
      <form method="post"> 
            <fieldset>
                <legend> <span class="number">.</span>Modification des informations:</legend><br>
                <br><br>
                <input type="text" placeholder="Changer le nom" name="name" id="name"><br>
                <br>
             
                <input type="text" placeholder="Changer le prenom" name="prenom" id="prenom"><br>
                
                <br>
                <input type="password" placeholder="Nouveau password" name="password" id="password"><br>
                <br>
                <input type="password" placeholder="Confirmation nouveau password" name="password_conf" id="password"><br>
                
                <br>

                 <br>
                 <br>

                <button type="submit" name="button" >Valider le changement</button>
                <?php if(isset($mess_error)){ ?>
                    <span><p><?= $mess_error ?></p></span>
                <?php } ?>
                <?php if(isset($mess_passwd)){ ?>
                <?= $mess_passwd ?>
                <?php } ?>
<?php

?>



            </fieldset>
         </form>
    </div>

</div>
<footer>
<?php
   include 'footer.php';
   ?>
</footer>
</body>
</html>