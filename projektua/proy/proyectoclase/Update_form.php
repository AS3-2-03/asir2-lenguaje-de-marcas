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


if (isset($_POST["pepe"])) {

    $id_mod = $_POST["id"];
    $ant_title = $_POST["old_title"];
    $ant_info = $_POST["old_info"];
    $ant_img = $_POST["old_img"];

    echo "el valor pasado es: $id_mod";
};


?>



<html>
<body>
<style >

div.a {
    font color: blue;
    text-align: center;
    background-color: white;
}

body  {
    background: plum; /* fallback for old browsers #76b852 */
  background: cadetblue; /* fallback for old browsers #76b852 */
  background: -webkit-linear-gradient(left, plum, cadetblue);
  background: -moz-linear-gradient(left, plum, cadetblue);
  background: -o-linear-gradient(left, plum, cadetblue);
  background: linear-gradient(to right, plum, cadetblue);
}
</style>



    <form action="" method="POST">
        <input type="hidden" name="last_id" value="<?php echo $id_mod?>">
        Title:<br>
        <input type="text" name="Title" value="<?php echo $ant_title?>">
        <br>
        Info:<br>
        <input type="text" name="Info" value="<?php echo $ant_info?>">
        <br>
        Img:<br>
        <input type="text" name="Img" value="<?php echo $ant_img?>">
        <br><br>
        <input type="submit" name="Actualizar">
    </form>

    <form action="delete_form.php" method="POST">
        <input type="submit" name="pepe" value="Back">
    </form>
<?php


if (isset($_POST['Actualizar'])) {

// echo "El id a modificar es:  $id_mod";

    $Titulo = $_POST["Title"];
    $Info = $_POST["Info"];
    $Imagen = $_POST["Img"];
    $last_id = $_POST["last_id"];


    echo "$Titulo" . "$Info". "$Imagen". "$last_id";


    $consulta = "UPDATE blog SET title = '$Titulo', info = '$Info', img = '$Imagen' WHERE id = $last_id;";
    $resultado = $conn->query($consulta);
    //echo $consulta;


    header ("Location: delete_form.php");


};