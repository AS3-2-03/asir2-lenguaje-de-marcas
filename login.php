<?php

// leer los datos enviados desde el formulario
// echo = imprime lo que le digas

//echo $_GET['user'];
//echo '<br>';
//echo $_GET['password'];


$user1 = "adrian";
//$pass1 = "adrianeibar";
$pass1 = '$2y$10$F.OkHuuDQfsTXvRrF0SPqeEteLKTTSrpOIw3asdBr4XKI3JjbXIei';


$user2 = "juan";
//$pass2 = "juaneibar";
$pass2 = '$2y$10$6VajaA0D4deyowZ6Jnbt6.4tcMi6f15P9wGV6xFOn1Rb9AJcjf0mG';

// datos desde el formulario
$user = $_POST['user'];
$password = $_POST['password'];


if ($user == $user1) {
    if (password_verify($password, $pass1)) {
        echo "OK";
    } else {
        echo "KO";
    }

} else if ($user == $user2) {
    if (password_verify($password, $pass2)) {
        echo "OK";
    } else {
        echo "KO";
    }
    
} else {
    echo "ERROR";
}



/*
($user1 == $_GET['user'] && $pass1 == $_GET['password'])
*/


/*
($user == $user1 && $pass == $pass1)
*/
?>