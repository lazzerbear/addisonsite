<?php
session_start();
require_once "dbConfig.php";
$email = $pwd = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
  $pwd = test_input($_POST["pwd"]);
}

 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = mysql_real_escape_string($data);
  return $data;
}



$sql = "select * from users where email = '$email' and password = '$pwd'";
$result = mysqli_query($db, $sql) or die("Failed to query database.".mysqli_error());
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
if($row['email'] == $email && $row['password'] == $pwd){
    //echo "Loged in mother fucker! Wholy shit though fucking got it finally. This shit was a bitch. God dam msqli functions.";
    echo '<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <style>
        .move {
            text-align: center;
            width: 33%;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

    </style>
</head>

<body>
    <div class="card move" style="width: 20rem;">
        <div class="card-block">
            <h1>Logged in</h1>
            <button class="btn-success" onclick="returnHome()">Continue to home.</button>
        </div>
    </div>
    <script>
        //----------------------------------------------change for live
        function returnHome() {
            window.location = "http://localhost/addisonsite/"
        }

    </script>
</body>

</html>
';







}else{
    echo "You done fucked it up! Login failed.".$row['email']." ".$pwd." ".$email." ".$row['password'];    
}

?>
