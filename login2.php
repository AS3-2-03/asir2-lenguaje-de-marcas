<?php

// leer los datos enviados desde el formulario
// echo = imprime lo que le digas

//definir los datos

/*$user = "adrian"
$pass = "adrianeibar"

$user2 = "juan"
$pass2 = "juaneibar"


if ($_GET['user'] == $user && $_GET['password'] == $pass) {
    echo "OK";

} else {
    echo "ERROR";
}*/
//leer desde el formulario
$user = $_POST['user'];
$password = $_POST['password'];

//
$user1 = "adrian";
$pass1 = "adrianeibar";

$user2 = "juan";
$pass2 = "juaneibar";

//leer desde el formulario
$user == $_GET['user'];
$pass == $_GET['password'];
//


/*if ($user == $user1){
    if $pass == $pass1) {
        echo "OK";
    }
} else if ($user == $user2){
    if ($pass == $pass2){
        echo "OK";
    }
} else {
    echo "KO";

}
*/



if ($user == $user1 && $pass == $pass1) ||
   ($user == $user2 && $pass == $pass2) {

    echo "OK";

} else {
    echo "KO";
}



?>
