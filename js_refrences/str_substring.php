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

                           
    
                                <!--  string substring function -->
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
                var str = "Favorite free funky function for Fred.";
                var n = str.substring(9,13);
                document.getElementById("stringChecked").innerHTML = str +"<br>" + n;
               
            }
            </script>  <!--  string substring function -->
</body> 
</html>