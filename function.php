<?php


function echo_izena($s="Kaixo") {
    echo "$s" . "<br>";
}


function echo_izena_3() {
    for ($i=0; $i<3; $i++) {
        echo_izena();
    }
}



echo_izena();
echo "-----------<br>";
echo_izena_3();
?>

