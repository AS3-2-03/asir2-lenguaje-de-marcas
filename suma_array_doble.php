<?php

$vv = [
    [1,2,3],
    [4,5,6]
    ];



$suma = 0;
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 3; $j++) 
    
   // echo "El número es: $x <br>";
    $suma = $suma + $vv[$i][$j];
       // $x++;

} 


//for ($x=0; $x <=6; $x++) {
    // echo "El número es $x <br>";
  //  $suma = $suma + $vv[x];
    
//}
// echo "La suma es = " . array_sum($v) . "\n";

    echo "batura : " . $suma;

?>