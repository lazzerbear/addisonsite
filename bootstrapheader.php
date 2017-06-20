<?php
//echo out the head of the html doument
echo'
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
';



//p5 cdn scripts
$p5cdn = "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.8/p5.js\" type=\"text/javascript\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.8/addons/p5.dom.min.js\" type=\"text/javascript\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.8/addons/p5.sound.js\" type=\"text/javascript\"></script>";

//cusom css link
$css = "<link href=\"customCSS1.css\" rel=\"stylesheet\" type=\"text/css\">" ;
$logincss = "<link href=\"signup_login.css\" rel=\"stylesheet\" type=\"text/css\">" ;

//standard boot strap cdn
/*$bootstrapcdn = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>';
*/
$bootstrapcdn = "

    
  
  <!--Bootstrap CDN-->
  <!-- Latest compiled and minified CSS -->
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <!-- jQuery library -->
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
  <!-- Latest compiled JavaScript -->
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

";


$content_links = "    <!--content links up -->  
    <div class=\"text-center\" id=\"contpage\">
        <a href=\"/game.php\" data-toggle=\"tooltip\" title=\"Soon to be P5.JS game.\">game page</a><br>
        <a  href=\"/php_references.php\" data-toggle=\"tooltip\" title=\" A collection of php references that I like.\">php references</a><br>
        <a href=\"/java_script_references.php\" data-toggle=\"tooltip\" title=\" A collection of JS references that I like.\">Javascript references</a><br>
        <a href=\"/example_code.php\" data-toggle=\"tooltip\" title=\"Currently just a butterbot animation.\">example code</a>
    </div>
   <!--content links up -->
    <script>
$(document).ready(function(){
    $('[data-toggle=\"tooltip\"]').tooltip();   
});
</script>

    <script src=\"\"></script>";

$content_links_up = "    <!--content links -->
    <div class=\"text-center\" id=\"contpage\">
        <a href=\"../game.php\" data-toggle=\"tooltip\" title=\"Soon to be P5.JS game.\" >game page</a><br>
        <a  href=\"../php_references.php\" data-toggle=\"tooltip\" title=\" A collection of php references that I like.\">php references</a><br>
        <a href=\"../java_script_references.php\" data-toggle=\"tooltip\" title=\" A collection of JS references that I like.\">Javascript references</a><br>
        <a href=\"../example_code.php\" data-toggle=\"tooltip\" title=\"Currently just a butterbot animation.\">example code</a>
    </div><!--content links -->
    <script>
$(document).ready(function(){
    $('[data-toggle=\"tooltip\"]').tooltip();   
});
</script>

    <script src=\"\"></script>";

?>
