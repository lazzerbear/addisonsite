<?PHP
$user = 'root';
$pass = "";
$dbname = "authentication";
$db = new mysqli('localhost', $user, $pass, $dbname) or die("failed to connect to database!");
?>