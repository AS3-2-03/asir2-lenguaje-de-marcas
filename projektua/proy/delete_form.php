<?php  session_start(); ?>  
<?php
$servername = "localhost";
$username = "adrian";
$password = "adrianeibar";
$dbname = "asirmarcas";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//



?>
      <?php if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:asirmarcas_def.php");  
       }

          echo $_SESSION['use'];
        echo "<br>";
          echo "Login Success";
          echo "<br>";
          echo "<a href='logout.php'> Logout</a>"; 
          ?>

<html>
<body>
<style >


div.a {
    color: white;
    text-align: center;
    background-color: #73d3;
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

</body>
</html>



<div class="a">

<pre>

<form action="insert_form.html" method="POST">
    <input type="hidden" name="id" value="<?php echo $row["id"]?>">
    <input type="submit" value="Insert">
</form>
<hr/>

</pre>

<?php






$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "<br> title: " . $row["title"]. "<br> info:" . $row["info"]. "<br> <img width='20%' src=img/" . $row["img"] . "> <br><hr/>";
        ?>
        <form action="delete.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row["id"]?>">
            <input type="submit" value="Delete">
        </form>

        <form action="Update_form.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row["id"]?>">
            <input type="hidden" name="old_title" value="<?php echo $row["title"]?>">
            <input type="hidden" name="old_info" value="<?php echo $row["info"]?>">
            <input type="hidden" name="old_img" value="<?php echo $row["img"]?>">
            <input type="submit" name="pepe" value="Update">
        </form>

        <hr/> 
        <?php
    }
} else {
    echo "0 results";
}
$conn->close();

?>
</div>