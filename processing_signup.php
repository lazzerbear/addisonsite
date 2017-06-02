<?php


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

?>

    <?php

$email2 = $email;
$psw2 = "\n".$psw;
$psw_repeat2 = "\n".$psw_repeat;

/* gotta secure.....
echo "<h2>Your Input for signup:</h2>";
echo $email2;
echo "<br>";
echo $psw2;
echo "<br>";
echo $psw_repeat2;
*/


$userinfo = fopen("userdata.txt","a") or die('unable to fopen file.');
fwrite($userinfo, $email2);
fwrite($userinfo, $psw2);
fwrite($userinfo, $psw_repeat2);
fclose($userinfo);
?>
