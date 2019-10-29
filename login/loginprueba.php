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
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "erabiltzailea: " . $row["user"]. " / " . $row["pass"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();












/*
($user1 == $_GET['user'] && $pass1 == $_GET['password'])
*/


/*
($user == $user1 && $pass == $pass1)
*/
?>