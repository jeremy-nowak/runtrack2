<?php
include 'connect.php';
// $req = mysqli_query($connect,"SELECT login, password FROM utilisateurs"); 
// $tab_bdd=mysqli_fetch_all($req,MYSQLI_ASSOC);
session_start();




if(isset($_POST['button'])){

    //$check = 1;
    $login = $_POST['login'];
    $password = $_POST['password'];
    $req = mysqli_query($connect,"SELECT login, password FROM utilisateurs WHERE login='$login' AND password='$password'");    
    
    if(mysqli_num_rows($req)===1){

            $user=mysqli_fetch_assoc($req);

            if($user['login']=='admin'){
                header('location: admin.php');
                $_SESSION["user"] = [
                    "login" => $user["login"],
                ];
            

            }

            elseif($user['login']== $login){
                header('location: profil.php');
                $_SESSION["user"] = [
                    "login" => $user["login"],
                ];                

            

            }

        }   
        
        else{

            echo "veuillez remplir tout les champs ";
            unset($_SESSION["user"]);


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
    <title>Connection</title>
</head>
<body>
<?php 
    include 'header.php';
    ?>
    <div class="fond_decran">
        <div class="formulaire" >
    <h1>Connexion:</h1>
        <form method="post"> 
            <fieldset>
                <legend> <span class="number">.</span>Information de log:</legend>
                <br><br>
                <input type="text" placeholder="Login" name="login" id="login"><br>
                <br>
                <input type="password" placeholder="Password" name="password" id="password"><br>
                <br>
                <button type="submit" name="button" >Me connecter</button><br>
                <br><br>
            <br><br><br></fieldset>
            </form>
    </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>
