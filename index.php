<?php 
include_once("analyticstracking.php");
require 'bootstrapheader.php'; 
	echo $bootstrapcdn; 				
 ?>
<link href="customCSS1.css" rel="stylesheet" type="text/css">
<title>Addison Martin's website. Made for fun and practice.</title>

</head>

<body>

    <?php require 'top_navigation_bar.php'; ?>


    <div class="container white-background">
        <div class="container">
            <audio controls loop class="pull-right">
                    <source src="sounds/coffeeOnTheBrainTrack.mp3" type="audio/mpeg">
                    No music for you because your browser is garbage. Have you considered trying google chrome or firefox?
                </audio>
        </div>
        <div class="well">
            <div class="fancyerpink text-center"> Addison made this website.</div>
            <p class="fancypink text-center"> Coffee on the brain</p>
        </div>

        <img class="img-responsive center-block botttom-images" src="img/Addison coffee brain.png" alt="Addison coffee brain" width="600" height="500">

    </div>
    <footer class="text-center footerA">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>Copyright © Addison Martin. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.getElementById("on-home").style.backgroundColor = "#F0F8FF";

    </script>
</body>

</html>
