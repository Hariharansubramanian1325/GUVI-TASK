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
      echo "Login Successful<br>"; 
      echo "<script> location.href='profile.html'; </script>";
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