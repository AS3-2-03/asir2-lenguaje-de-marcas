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

?>

<html>
<body>
<style >

div.a {
    font color: blue;
    text-align: center;
    background-color: cyan;
}
body  {
  background-color: smooth grey;
}
</style>

<div class="a">
<h1>This is music.</h1>
<p>ut.</p>
</div>

</body>
</html>


<form action="asirmarcas_login.html" method="POST">
    <input type="hidden" name="id" value="<?php echo $row["id"]?>">
    <input type="submit" value="Login">
</form>
<hr/> 


<?php


$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "<br> title: " . $row["title"]. "<br> info:" . $row["info"]. "<br> <img width='20%' src=img/" . $row["img"] . "> <br><hr/>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>