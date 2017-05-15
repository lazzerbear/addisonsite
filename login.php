<?php 
include_once("analyticstracking.php");
require 'bootstrapheader.php'; 
	echo $bootstrapcdn; 
		echo $css;
        echo $logincss;
				
 ?>


<title>Addisons login page</title>

</head>

<body>
<?php require 'top_navigation_bar.php'; ?>

    
    
<!--modal signup-->
<button class="btn-primary pull-right" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
    <div class="container">
<p class="text-center fancypink">Not yet functional!</p>
        </div>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content animate" action="processing_signup.php" method="post">
    <div class="container2">
      <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      <input type="checkbox" checked="checked"> Remember me
      <p>By creating an account you agree to our <a href="terms.php">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



<div class="container">

<!--login form-->
  <h2 class="text-center">Login here</h2>
  <p class="text-center">Logging in is how you get to the hidden stuff.</p>
  <form action="processing_login.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input name="pwd" type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>


<script>
    document.getElementById("on-login").style.backgroundColor = "#F0F8FF";
    document.getElementById("on-login").style.color = "#494949";
</script>


</body>
</html>