<?php
session_start();
require "dbConfig.php";
    
$email = $psw = $psw_repeat =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
  $psw_repeat = test_input($_POST["psw-repeat"]);
  $psw = test_input($_POST["psw"]);

}
 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = mysql_real_escape_string($data);
  return $data;
}

if($psw = $psw_repeat){
$sql = "INSERT INTO users(email, password) VALUES('$email', '$psw')";
mysqli_query($db, $sql);
$_SESSION['message'] = "You are as of now logged towards the in direction mate.";
$_SESSION['email'] = $email;
header("location: http://localhost/addisonsite/index.php");
    echo "connection successful.";
}
?>