<?php

$vv = [
    [1,0,0],
    [0,0,0]
    ];



/* for
$suma = 0;
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 3; $j++)  {
        // echo $vv[$i][$j];
        $suma = $suma + $vv[$i][$j];
    }
}

*/
   // echo "El número es: $x <br>";
   // $suma = $suma + $vv[$i][$j];
       // $x++;

// $vv[$i][$j] = $vv[0][0], $vv[0][1], $vv[0][2], $vv[1][0], $vv[1][1], $vv[1][2]...




/*
// while

$suma = 0;
$i = 0;
$j = 0;

While ($i<2($vv)) {
    $j=0;
    while ($j<3($vv[0])) {

    }
}
*/



// foreach
$suma = 0;
foreach ($vv as $v) {
    foreach($v as $x) {
        $suma = $suma + $x;
    }
}


echo "batura foreach: " . $suma;






//for ($x=0; $x <=6; $x++) {
    // echo "El número es $x <br>";
  //  $suma = $suma + $vv[x];
    
//}
// echo "La suma es = " . array_sum($v) . "\n";

    echo "batura : " . $suma;

?>