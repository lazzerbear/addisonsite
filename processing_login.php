<?php

$email = $pwd = "works";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
  
  $pwd = test_input($_POST["pwd"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

    <?php

/*gotta secure.....

echo "<h2>Your Input for login:</h2>";
echo $email;
echo "<br>";
echo $pwd;
echo "<br>";
*/

?>
