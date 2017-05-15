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

                           
                                 <!--  prototype  -->
                <div class="container text-center well">
                   <code id="pepe">prototype function adds to an object.</code>
                    <br>
                    <br>
                    <button class="btn-primary" onclick="myFunk()">click me!</button>
                </div>
</div> <!-- container-->
    
            <script>
                 function namer(firstname, lastname, age){
                    this.firstname = firstname;
                    this.lastname = lastname;
                     this.age = age;
                 }
                           
                    namer.prototype.race = "white";
                    var addison = new namer("addison", "martin", 24);

                function myFunk(){
                    document.getElementById("pepe").innerHTML = addison.race + " " + addison.firstname + " " + addison.lastname;
                    }

            </script>  <!--  prototype  -->
</body> 
</html>
