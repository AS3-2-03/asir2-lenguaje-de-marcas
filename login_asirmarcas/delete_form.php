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
        <form action="insert_form.html" method="POST">
            <input type="hidden" name="id" value="<?php echo $row["id"]?>">
            <input type="submit" value="Insert">
        </form>
        <hr/> 
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