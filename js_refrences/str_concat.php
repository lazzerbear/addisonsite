<?php 
include_once("../analyticstracking.php");
require '../bootstrapheader.php'; 
	echo $bootstrapcdn; 
				
 ?>
<link href="../customCSS1.css" rel="stylesheet" type="text/css">
<title>Addisons content page.</title>
</head>

<body>
    <?php require '../top_navigation_bar_up.php'; ?>
<div class="container"> 
<h1 class="text-center jumbotron">JS strings</h1>

   <?php echo $content_links_up; ?>
                
            <hr>

                           
                                <!--  string concat function -->
                <div class="container text-center well">
                    <code class="stringToCheck">.substring copys a part of the string.</code>
                    <p id="stringChecked"></p>
<br>
<br>
                    <button class="btn-primary" onclick="myFunk()">Activate</button>
                </div>
</div> <!-- container-->
            <script>
            function myFunk(){
                var str1 = "Favorite free funky function for Fred.";
                var str2 = " Funky fred is free for favorite function.";
                var n = str1.concat(str2);
                document.getElementById("stringChecked").innerHTML = n;
               
            }
            </script>  <!--  string concat function -->
</body> 
</html>