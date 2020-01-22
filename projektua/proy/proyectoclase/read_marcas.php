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
    color: white;
    text-align: center;
    background-color: #73d3;
}

/*
div.b {
    font color: blue;
    text-align: center;
}
*/

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
<pre>


<h1>Thi s ism
yp age.</h1>
</pre>
<p>ut.</p>

<form action="login_estilos.html" method="POST">
    <input type="hidden" name="id" value="<?php echo $row["id"]?>">
    <input type="submit" value="Login">
</form>

<hr/>
</div>

</body>
</html>



<div class="a">
<pre>

<?php


$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "<br> title: " . $row["title"]. "<br> info:" . $row["info"]. "<br> <img width='40%' src=img/" . $row["img"] . "> <br><hr/>";
    }
} else {
    echo "0 results";
}
$conn->close();


// /asir2-lenguaje-de-marcas/login_asirmarcas/asirmarcas_def.php
// /workspace/PRO/prueba_inter/

?>

</pre>
</div>



