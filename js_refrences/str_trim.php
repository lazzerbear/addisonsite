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

                           
    
                                <!--  string trim function -->
                <div class="container text-center well">
                    <code class="stringToCheck">.trim cuts off white space around a string.</code>
                    <p id="stringChecked"></p>
<br>
<br>
                    <button class="btn-primary" onclick="myFunk()">Activate</button>
                </div>
</div> <!-- container-->
            <script>
            function myFunk(){
                var str = "         Lots of white space.              ";
                var n = str.trim();
                window.alert("!" + str + "!");
                document.getElementById("stringChecked").innerHTML ="!" + str + "!" + "<br>" + "!" + n;
                  window.alert("!" + n + "!");
               
            }
            </script>  <!--  string trim function -->
</body> 
</html>