<?php
    

function occurrences($str, $char){ 
    $counter=0;

    for ($i=0; isset($str[$i]); $i++){
        if($char==$str[$i]){
        $counter++ ;
}
}
echo "Le nombre d'occurences est de: " .$counter ; 
}
occurrences("Bonjour" , "o");
?>