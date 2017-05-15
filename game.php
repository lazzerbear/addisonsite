<?php
include_once("analyticstracking.php");
require 'bootstrapheader.php'; 
	echo $bootstrapcdn; 
	echo $css;

				
 ?>
<title>Addisons p5 game page.</title>
</head>

<body>
<?php require 'top_navigation_bar.php'; ?>
    
    <div class="container">
        <h1 class="text-center jumbotron">The game page <p class="text-center fancypink">Comming soon.</p></h1>
       

        <?php echo $content_links; ?>
    </div>
</body>
<script>
    document.getElementById("on-home").style.backgroundColor = "#F0F8FF";
    
</script>
</html>