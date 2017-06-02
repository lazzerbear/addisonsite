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
        <h1 class="text-center jumbotron">Java Script reference page</h1>

        <?php echo $content_links; ?>

        <h2 class="text-center">Java Script references<br></h2>
        <div class="well">
            <p class="text-center">Only string methods for now.</p>
            <div class="text-center" id="contpage">
                <a href="/js_references/prototype.php">prototype</a><br>
                <a href="/js_references/str_concat.php">concat</a><br>
                <a href="/js_references/str_length.php">length</a><br>
                <a href="/js_references/str_replace.php">replace</a><br>
                <a href="/js_references/str_search.php">search</a><br>
                <a href="/js_references/str_substring.php">substring</a><br>
                <a href="/js_references/str_trim.php">trim</a><br>
                <!--  <a href="#"></a><br>  -->
            </div>
        </div>

        <hr>
        <!-- js reference links -->
    </div>
</body>

</html>
