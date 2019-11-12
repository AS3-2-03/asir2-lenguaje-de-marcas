<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asirmarcas";
// Create connection

$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//


$title = $_POST["title"];
$info = $_POST["info"];
$img = $_POST["img"];



$sql = " INSERT INTO blog (title, info, img) VALUES ('$title','$info','$img');";



$result = $conn->query($sql);
header("Location: delete_form.php");