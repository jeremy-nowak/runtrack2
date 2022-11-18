<?php
$str= "Certaines choses changent, et d'autres ne changeront jamais." ;
$c= 0;
for ($i = 1 ; isset($str[$i]); $i++){
    echo $str[$i+$c] ;
}
for ($x = 0 ; $x < $c+1; $x++){
    echo $str[$x];
}

?>