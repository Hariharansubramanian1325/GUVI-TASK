<?php 
$username = $_POST['username'];
$password = $_POST['password'];
$servername = "localhost";
$dbusername = "root"; // default username for XAMPP
$dbpassword = ''; // default password for XAMPP is empty
$dbname = "login"; // replace with your database name

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
$user = mysqli_query($conn, "SELECT * FROM register WHERE username = '$username'");


if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($password == $row['password']){
      echo "Login Successful<br><br>";
      
      echo "<h3>PROFILE</h3>";
      echo "<b>NAME:</b>";
      echo $row['username'];
      echo"<br>";
      echo "<b>EMAIL:</b>";
      echo $row['email'];
      echo"<br>";
      echo "<b>CONTACT:</b>";
      echo $row['contact'];
      echo"<br>";
      echo "<b>DOB:</b>";
      echo $row['DOB'];
      echo"<br>";
      echo "<b>AGE:</b>";
      echo $row['age'];
      echo"<br>";
      echo "<b>DOMAIN:</b>";
      echo $row['domain'];
      echo"<br>";
      echo "<button> <a href='index.html'>HOME</a></button>";
      exit;

    
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }


?>