<?PHP
$hostname = "localhost";
$user = 'lazzerbe_wrdp1';
$pass = "hamham";
$dbname = "lazzerbe_authentication";
$db = new mysqli($hostname, $user, $pass, $dbname); //or die("failed to connect to database!");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
