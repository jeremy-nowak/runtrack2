
<?php
$i = 0;
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie." ;
$a = 0;


while (isset($str[$i]) == true) {
$a = $a + 1;
$i = $i + 1;

}
  
for ($i = 0; $i < $a ;$i++){
  if ($i % 2 == 0)
  echo $str[$i] ; 
  }
?>
