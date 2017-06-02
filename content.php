<?php 
include_once("analyticstracking.php");
require 'bootstrapheader.php'; 
	echo $bootstrapcdn; 
				
 ?>
<link href="customCSS1.css" rel="stylesheet" type="text/css">
<title>Addisons content page.</title>
</head>

<body>
    <?php require 'top_navigation_bar.php'; ?>

    <div class="container">
        <h1 class="text-center jumbotron">The content page</h1>
        <?php echo $content_links; ?>
    </div>
</body>
<script>
    document.getElementById("on-content").style.backgroundColor = "#F0F8FF";
    document.getElementById("on-content").style.color = "#494949";

</script>

</html>
