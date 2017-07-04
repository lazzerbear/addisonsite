<?php 
session_start();
require 'bootstrapheader.php'; 
	echo $bootstrapcdn; 
				
 ?>
<link href="customCSS1.css" rel="stylesheet" type="text/css">
<title>movie page</title>
</head>

<body>


    <?php require 'top_navigation_bar.php'; ?>
    <?php
    if($_SESSION['email'] === "addy@gmail.com"){
        echo '  <div class="container">

        <video width="100%" height="100%" controls>
  <source src="video/movieTest.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

    </div>';
    
    }else{
        echo "Errors n shit moveis.php has'em. <br> That or you not logged in as right person.";
    }
    ?>

</body>


</html>
