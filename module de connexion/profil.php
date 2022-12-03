<?php
   include 'connect.php';
   session_start();
?>
<?php
if(isset($_POST['button'])){

   //$check = 1;
   $login = $_POST['login'];
   $password = $_POST['password'];
   $req = mysqli_query($connect,"SELECT login, password FROM utilisateurs WHERE login='$login' AND password='$password'");    
   
   if(mysqli_num_rows($req)===1){

           $user=mysqli_fetch_assoc($req);

           if($user['login']=='admin'){
               header('location: admin.php');
       
           
           }elseif($user['login']== $login){
               header('location: profil.php');
           }

       }   
       
       else{

           echo "veuillez remplir tout les champs ";
        }
       
   }
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
</header>
<div class="millieu">

   <div class="formulaire">
      <form method="post"> 
        <h1>Bonjour <?= $_SESSION["user"]["login"]?> </h1>
            <fieldset>
                <legend> <span class="number">.</span>Modification des informations:</legend><br>
                <br><br>
                <input type="text" placeholder="Changer le nom" name="name" id="name"><br>
                <br>
             
                <input type="text" placeholder="Changer le prenom" name="prenom" id="prenom"><br>
                <br>
                <input type="text" placeholder="Login" name="login" id="login"><br>
                <br>
                <input type="password" placeholder="Nouveau password" name="password" id="password"><br>
                <br>
                <input type="password" placeholder="Confirmation nouveau password" name="password_conf" id="password"><br>
                
                <br>
                <?php if(isset($mess_passwd)){ ?>
                <?= $mess_passwd ?>
                <?php } ?>

                 <br>
                 <br>

                <button type="submit" name="button" >Valider le changement</button>
                <?php if(isset($mess_error)){ ?>
                    <span><p><?= $mess_error ?></p></span>
                <?php } ?>

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