<?php



function familyName($fname) {
    echo "$fname Sevilla.<br>";
}




function echo_izena_3() {
    for ($i=0; $i<3; $i++) {
        familyName($fname);
    }
}



familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");


echo "--------<br>";
echo_izena_3();