<?php
    $a = 30;
    $b = 20;

function calcule(int $a,string $operation,int $b){

    switch ($operation){
        case "+":
            $result = $a+$b;
            break;
        case "-":
            $result = $a-$b;
            break;
        case "*":
            $result = $a*$b;
            break;
        case "/":
            $result = $a/$b;
            break;
        case "%":
            $result = $a%$$b;
            break;


    }
return $result;

}
echo calcule(4, "+", 5)
?>