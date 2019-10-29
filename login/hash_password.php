<?php

//$pass = 'qwerty';
$pass = 'juaneibar';
$hash = password_hash($pass, PASSWORD_DEFAULT);


//$pass_hash = "$2y$10$nfuT/pWdT2RtLjm7Nq.4pOy2/K13.yk.omahjJcnCorRv4tFe/Xca";

$hash = '$2y$10$F.OkHuuDQfsTXvRrF0SPqeEteLKTTSrpOIw3asdBr4XKI3JjbXIei';
echo $hash . "<br>";

if (password_verify($pass, $hash)) {
    //Success!
    echo "Success!";

} else {
    // Invalid credentials
    echo "ERROR!";
}


echo $hash;


//contraseña: adrian / adrianeibar
//$pass1 = '$2y$10$F.OkHuuDQfsTXvRrF0SPqeEteLKTTSrpOIw3asdBr4XKI3JjbXIei'


//contraseña: juan / juaneibar
//$pass2 = '$2y$10$6VajaA0D4deyowZ6Jnbt6.4tcMi6f15P9wGV6xFOn1Rb9AJcjf0mG'
