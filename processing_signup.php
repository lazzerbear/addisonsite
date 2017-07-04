<?php
session_start();
require_once "dbConfig.php";
    
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
  
  return $data;
}

if($psw = $psw_repeat){
$sql = "INSERT INTO users(email, password) VALUES('$email', '$psw')";
mysqli_query($db, $sql);
$_SESSION['message'] = "You are as of now logged towards the in direction mate. Pour your self a beer.";
$_SESSION['email'] = $email;
header("location: http://localhost/addisonsite/index.php");
    echo "connection successful.";
}
?>
