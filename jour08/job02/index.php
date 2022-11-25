<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 02</title>
</head>
<body>
    <form action="" method="post">
        <!-- <p>le site a été visité <?php echo $_COOKIE["nbvisites"];?> fois</p> -->
        <input type="submit" name ="clear" value="reset" >
    </form>
    
</body>
</html>


<?php
if (isset($_COOKIE["nbvisites"])){
    
    setcookie("nbvisites", $_COOKIE["nbvisites"] +1);

}
    else {
        setcookie("nbvisites", 1);

    }
    if (isset($_POST["clear"])){
        setcookie("nbvisites", $_COOKIE["nbvisites"] = 0);
        session_destroy();
        header("location:" . "index.php");
    
    
    
    }
    echo "<br/>Le site a été visité ".$_COOKIE["nbvisites"].".";
   







?>