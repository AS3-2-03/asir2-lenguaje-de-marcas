<?php  session_start(); ?>  // session starts with the help of this function 
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
echo "Connected successfully";




if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:delete_form.php"); 
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['user'];
     $password = $_POST['password'];
         $sql = "SELECT * FROM user WHERE name = '$user';";

     $result = $conn->query($sql);

     $row = $result->fetch_assoc();
      if(($result->num_rows > 0) && ($user == $row["name"]) && (password_verify($password, $row["password"])))  // username is  set to "Ank"  and Password   
         {                                   // is 1234 by default     

          $_SESSION['use']=$user;


         echo '<script type="text/javascript"> window.open("delete_form.php","_self");</script>';            //  On Successful Login redirects to home.php

        }

        else
        {
            echo "invalid UserName or Password";        
        }
}
 ?>
<html>
<head>

<title> Login Page   </title>

</head>

<body>
<link rel="stylesheet" href="login.css">
<form action="" method="post">
  <div class="login-page">
    <div class="form">
    
      <form class="login-form">
        <input type="text" name="user" placeholder="Usuario"/>
        <input type="password" name="password" placeholder="Contraseña"/>
        <button type="submit"class="tipografia" name="login">Login</button>
      

          </form>


          <form action="insertusuario.php" method="POST">
        <input type="submit" name="pepe" value="Create user">
        </form>


        </div>
      </div>


      </form>
      
      <div class="login-page">
        <div class="form">
          <form class="register-form">

          </form>
          <form action="prueba_inter/inicio.html" method="POST" class="login-form">

            <input type="submit" value="Temperature">
          </form>
        </div>
      </div> 
</body>
</html>