<?php 
include_once("analyticstracking.php");
require 'bootstrapheader.php'; 
	echo $bootstrapcdn;
    echo $css;

				
 ?>
 <link href="customCSS1.css" rel="stylesheet" type="text/css">

 
 <style>
     p{
         font-size: 18px;
         
     }

</style>
<title>Addison's Portfolio</title>
</head>
<body>
    <?php require 'top_navigation_bar.php'; ?>

  <div class="container">
    
    <div class="row">
      <div class="col-xs-6">
        <h1 class="fancypink">Addison S. Martin</h1>
      </div>
      <!-- <div class="col-xs-6">
        <p class="text-right"><a href="">Download my Resume <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></p>
      </div>
      -->
    </div>
    <hr>
    <div class="row">
      <div class="col-xs-7">
        <div class="media">
          <div class="media-left"> <a href="img/Addison Martin.jpg"> 
          <img class="media-object img-rounded" src="img/Addison Martin.jpg" alt="Addison S. Martin" hight="200" width="200"> </a> </div>
          <div class="media-body">
          <div class="media-body">
            <h2 class="media-heading">Web Developer</h2><br>
          <p> I am a new web developer looking to create  <br> fun and interesting content on the web.<p></div>
               </div>
        </div>
      </div>
      <div class="col-xs-5 well">
        <div class="row">
          <div class="col-lg-12" align="left"> 
            <h4><span  aria-hidden="true">addisonmartin547@gmail.com</span></h4>
          </div>
        </div>
        <h4><span class="" aria-hidden="true"></span>(555)555-5555</h4>
        <div class="row">
          <div class="col-lg-6">
            <h4><span class="" aria-hidden="true"></span>Pocatello, ID</h4>
          </div>
          <div class="col-lg-6">
            <!--<h4><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> : 123-456-7890</h4>-->
          </div>
          <div class="col-lg-6"></div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row"> 
      <div class="col-sm-8 col-lg-7">
        <h2>About me <br>  <br> 
                <span style="color:#DF7576;">X_X</span></h2>
        <hr>
        <div class="row">
<!--        	<div class="col-xs-6"><h4>Graphical Design</h4></div>-->
        	<div class="col-xs-6">
        	  
        	</div>
        </div>
        <h4><span class="label label-default">Small Business Friendly</span></h4>
        <p>Working to create content to help customers find what they are looking for. <br> Making responsive and interactive web designs 
        that get people to what they need in style.</p>
        <div class="row">
          <div class="col-xs-6">
              <h4 ><span class="label label-default">Self studied</span></h4>
          </div>
          <div class="col-xs-6">
          
          </div>
        </div>
        <h4><span class="label label-default"></span></h4>
            <p>Always learning new things and moving forward.</p>
</div>
      <div class="col-sm-4 col-lg-5">
        <h2>Skill Set</h2>
        <hr>
        <!-- Green Progress Bar -->
        <div class="progress">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> HTML</div>
        </div>
        <!-- Blue Progress Bar -->
        <div class="progress">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 75%"> CSS</div>
        </div>
        <!-- Yellow Progress Bar -->
        <div class="progress">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 55%"> JAVASCRIPT</div>
        </div>
        <!-- Red Progress Bar -->
        <div class="progress">
          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%"> PHP</div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 25%"> GITHUB</div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 55%"> PHOTOSHOP</div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 25%"> ILLUSTRATOR</div>
        </div>
</div>
    </div>
      <!--
    <hr>
    <h2>Work Experience</h2>
<hr>
    <div class="row">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-xs-5">
            <h4>ABC Auto Chubbuck</h4>
          </div>
<div class="col-xs-5">
            <h4 class="text-right"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Jan 2002 - Dec 2006</h4>
          </div>
        </div>
        <h4><span class="label label-default">Web Developer</span></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, recusandae, corporis, tempore nam fugit deleniti sequi excepturi quod repellat laboriosam soluta laudantium amet dicta non ratione distinctio nihil dignissimos esse!</p>
        <ul>
        	<li>Lorem ipsum dolor sit amet.</li>
        	<li>Lorem ipsum dolor sit amet, consectetur.</li>
        	<li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-xs-5">
            <h4>XYZ Corp.</h4>
          </div>
          <div class="col-xs-6">
            <h4 class="text-right"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Jan 2002 - Dec 2006</h4>
          </div>
        </div>
        <h4><span class="label label-default">Senior Web Developer</span></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, recusandae, corporis, tempore nam fugit deleniti sequi excepturi quod repellat laboriosam soluta laudantium amet dicta non ratione distinctio nihil dignissimos esse!</p>
        <ul>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet, consectetur.</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
        </ul>
      </div>
    </div>
    <hr>
    <h2>Portfolio</h2>
    <hr>
    <div class="container">
    	<div class="row">
    		<div class="col-lg-4 col-sm-6 col-xs-6"><img src="img/300X200.gif" alt=""><hr class="hidden-lg"></div>
    		<div class="col-lg-4 col-sm-6 col-xs-6"><img src="img/300X200.gif" alt=""><hr class="hidden-lg"></div>
    		<div class="col-lg-4 col-sm-6 col-xs-6"><img src="img/300X200.gif" alt=""></div>
    		<div class="col-lg-4 col-sm-6 col-xs-6 hidden-lg"><img src="img/300X200.gif" alt=""></div>
    	</div>
        <hr>
        <div class="row">
    		<div class="col-lg-4 col-sm-6 col-xs-6"><img src="img/300X200.gif" alt=""><hr class="hidden-lg"></div>
    		<div class="col-lg-4 col-sm-6 col-xs-6"><img src="img/300X200.gif" alt=""><hr class="hidden-lg"></div>
    		<div class="col-lg-4 col-sm-6 col-xs-6"><img src="img/300X200.gif" alt=""></div>
    		<div class="col-lg-4 col-sm-6 col-xs-6 hidden-lg"><img src="img/300X200.gif" alt=""></div>
    	</div>
    </div>
    <hr>
    <!--<h2>Contact</h2>
    <hr>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-lg-offset-3 col-xs-12 col-lg-6">
      <div class="jumbotron">
        <div class="row text-center">
          <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12"> </div>
          <div class="text-center col-lg-12"> 
            <!-- CONTACT FORM https://github.com/jonmbake/bootstrap3-contact-form -->
             <!--<form role="form" id="feedbackForm" class="text-center">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                <span class="help-block" style="display: none;">Please enter your name.</span></div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span></div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder="Message"></textarea>
                <span class="help-block" style="display: none;">Please enter a message.</span></div>
              <span class="help-block" style="display: none;">Please enter a the security code.</span>
              <button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg" style=" margin-top: 10px;"> Send</button>
            </form>
          
          </div>
        </div>
      </div>
    </div>
  </div>
  -->
</div>


<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <!--<p>Copyright © Addison Martin. All rights reserved.</p> -->
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
        <script>
            document.getElementById("on-resume").style.backgroundColor = "#F0F8FF";
            document.getElementById("on-resume").style.color = "#494949";
        </script>
</body>
</html>
