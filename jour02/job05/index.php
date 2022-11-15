

<?php

for ($i=2; $i<=1000;$i++){
    $compte = 0;
    for ($x=2;$x<$i;$x++){
        if ($i%$x==0){
            $compte++;
        }      
    }
    if ($compte == 0) {
        echo "$i <br>";
    }
    $compte = 0;


}
?>