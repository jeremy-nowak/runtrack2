

<?php
$connect = mysqli_connect("localhost", "root", "", "moduleconnexion");
//  $connect = mysqli_connect("localhost", "jeremy-nowak", "ultraplesk83", "jeremy-nowak_module_de_connexion");
if (session_id() =='' ){
    session_start();
}





if(isset($_POST['button'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $req = mysqli_query($connect,"SELECT login, password FROM utilisateurs WHERE login='$login' AND password='$password'");    
    
    
    if(mysqli_num_rows($req)===1){
        $user=mysqli_fetch_assoc($req);

            

            if($user['login']=='admin'){
                
                header('location: admin.php');
                $_SESSION['login'] = $user['login'];
            }

            elseif($user['login']== $login){
                header('location: profil.php');
                $_SESSION['login'] = $user['login'];                
            }
            

        }   
        
        else{

            echo "veuillez remplir tout les champs ";
            unset($_SESSION["login"]);


         }

        
    }
             
?>