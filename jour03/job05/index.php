<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php
$str="On n'est pas le meilleur quand on le croit mais quand on le sait" ;

$voyelle = "AaEeIiOoUuYy" ;
$consonne = "BbCcDdFfGgHhJjKkLlMmNnPpQqRrSsTtVvWwXxZz" ;

$a= 0 ;
$b= 0 ;

for ($i=0 ; isset($str[$i]) ; $i++) {
    for ($x=0 ; isset($voyelle[$x]) ; $x++) {
        if($voyelle[$x]==$str[$i]){
            $a++ ;
        }
    }
    for ($y=0 ; isset($consonne[$y]) ; $y++){
        if($consonne[$y]==$str[$i]){
            $b++ ;
        }
    } 
    
}
?>
</head>
<body>
    <table border =1>
    <tr>
        <th>consonne</th>
        <th>voyelle</th>
    </tr>
    <tr>
        <th><?php echo $b?></th>
        <th><?php echo $a?></th>


    
</body>
</html>