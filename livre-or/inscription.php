<?php
include('connect.php')
?>

<?php
if (isset($_POST["button_inscri"])){
    @$login = $_POST["login"];
    @password = $_POST["password"];
    @password_conf = $_POST['password_conf'];
    if (isset)
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="livre-or.css">
    <title>Inscription</title>
</head>
<body>

    <?php include 'header.php'?>
<div class="millieu">
    <div class="formulaire" >
    <h1>Inscription:</h1>
        <form method="post"> 
            <fieldset>
                <legend> <span class="number">.</span>Informations:</legend><br>
                <br>
                <br>
                <input type="text" placeholder="Login" name="login" id="login"><br>
                <br>
                <input type="password" placeholder="Password" name="password" id="password"><br>
                <br>
                <input type="password" placeholder="Password" name="password_conf" id="password"><br>
                
                <br>
                <?php if(isset($mess_passwd)){ ?>
                <?= $mess_passwd ?>
                <?php } ?>
             
                 <br>
                 <br>

                <button type="submit" name="button_inscri" >Valider</button>
                <?php if(isset($mess_error)){ ?>
                    <span><p><?= $mess_error ?></p></span>
                <?php } ?>

            </fieldset>
            </form>
    </div>
</div>
<?php include 'footer.php'?>
</body>
</html>
     





