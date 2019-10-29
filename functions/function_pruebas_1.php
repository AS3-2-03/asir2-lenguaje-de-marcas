<?php
// https://www.w3schools.com/php/php_functions.asp
/*
echo "kaixo";
echo "kaixo";
echo "kaixo";
*/
function echo_izena($s="kaixo", $s2="hola") {
    echo "$s $s2 <br>";
}
function echo_izena_3() {
    for ($i=0; $i<5; $i++) {
        echo_izena("Hello", "how are you?");
    }
}
/*
for ($i=0; $i<3; $i++) {
    echo_izena();
}
*/
echo_izena();
echo "--------<br>";
echo_izena_3();