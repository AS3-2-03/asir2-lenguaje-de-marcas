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
    background-color: white;
}

div.b {
    font color: blue;
    text-align: center;
}

body  {
background: plum; /* fallback for old browsers #76b852 */
  background: cadetblue; /* fallback for old browsers #76b852 */
  background: -webkit-linear-gradient(right, plum, cadetblue);
  background: -moz-linear-gradient(right, plum, cadetblue);
  background: -o-linear-gradient(right, plum, cadetblue);
  background: linear-gradient(to left, plum, cadetblue);
}
</style>

<div class="a">
<h1>This is music.</h1>
<p>ut.</p>
<hr/>
</div>

<div class="b">
<form action="login_estilos.html" method="POST">
    <input type="hidden" name="id" value="<?php echo $row["id"]?>">
    <input type="submit" value="Login">
</form>

</div>

</body>
</html>



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