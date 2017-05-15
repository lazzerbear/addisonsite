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
            <h1 class="text-center jumbotron">JS strings</h1><hr>
                    <?php echo $content_links_up; ?>
            
            <hr>

                                           <!--  number.isfinite function -->
                            <div class="container text-center well">
                                
                                <code class="stringToCheck">number.isfinite() returns true if number is finite.</code>
                                <p id="pepe"></p>
<br>
<br>
                                <button class="btn-primary" onclick="myFunk()">Activate</button>
                            
                            </div>
        </div> <!-- container-->

                <script>
                    function myFunk(){
                        var res = "";
                            res = res + Number.isFinite(123) + ": 123<br>";
                            res = res + Number.isFinite(-1.23) + ": -1.23<br>";
                            res = res + Number.isFinite(5-2) + ": 5-2<br>";
                            res = res + Number.isFinite(0) + ": 0<br>";
                            res = res + Number.isFinite('123') + ": '123'<br>";
                            res = res + Number.isFinite('Hello') + ": 'Hello'<br>";
                            res = res + Number.isFinite('2005/12/12') + ": '2005/12/12'<br>";
                            res = res + Number.isFinite(Infinity) + ": Infinity<br>";
                            res = res + Number.isFinite(-Infinity) + ": -Infinity<br>";
                            res = res + Number.isFinite(0 / 0) + ": 0 / 0<br>";

                            document.getElementById("pepe").innerHTML = res;

                    }
            </script>  <!--  number.isfinite function -->
</body> 
</html>