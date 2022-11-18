


<?php
    $str = "I'm sorry Dave I'm afraid I can't do that.";
    $voyelles = ['a' , 'e' , 'I' , 'o' , 'u' , 'y','i'];
    $a= 0;
    while (isset($str[$a]) == true){
       foreach ($voyelles  as $key => $value){
        if($str[$a] == $value){
            echo $str[$a];
        }
    }
    $a =$a+1;
    }
  ?>