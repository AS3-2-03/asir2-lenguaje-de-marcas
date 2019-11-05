<?php
// leer los datos enviados desde el formulario
// echo = imprime lo que le digas

//echo $_GET['user'];
//echo '<br>';
//echo $_GET['password'];




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
// formulariotik bidalitako datuak irakurri
// leer desde el formulario
$user =  $_POST['user'];
$password = $_POST['password'];
//
$sql = "SELECT * FROM users WHERE user = '$user';";
//echo $sql . "<br><br>";
//
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($user == $row["user"]){
        if (password_verify($password, $row["pass"])) {
            echo "OK";
        } else{
            echo "KO";
        }
    } else {
        echo "KO";
    }
} else {
    echo "KO";
}
$conn->close();







/*
($user1 == $_GET['user'] && $pass1 == $_GET['password'])
*/


/*
($user == $user1 && $pass == $pass1)
*/
